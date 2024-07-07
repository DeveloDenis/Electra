<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use SebastianBergmann\CodeCoverage\Report\Html\Colors;

class ProductController extends Controller
{


    public function viewproducts(Request $request){
                if(!Gate::allows('admin')){
                    abort(403);
            }

            
             

           $products = Product::orderBy('created_at','DESC');
           $categories = Category::all();

           if($request->has('search2')){
            $products = $products->where('name','like','%'.$request->get('search2').'%');
           }

             if($request->has('type')){
                $products = $products->where('category_id','like','%'.$request->get('type').'%');
             }

             $TaskCount = Task::all()->count();

            return view('admin.view-products',[
                'products'=>$products->paginate(10),
                'categories'=>$categories,
                'TaskCount'=>$TaskCount,
            ]);
            }




    public function ACP(){
        if(!Gate::allows('admin')){
                abort(403);
        }

        $categories = Category::all();
        $brands = Brand::all();
        $colors = Color::where('status','0')->get();

        $TaskCount = Task::all()->count();

        return view('admin.create-product',compact('categories','brands','colors','TaskCount'));
            }



            

       public function createProduct(Request $request){

        if(!Gate::allows('admin')){
            abort(403);
        }

         $validated = $request->validate([
           'category_id' =>'required',
           'product_name'=>'required',
           'product_code'=>'required',
           'brand_id'=>'required',
           'product_description_small'=>'required',
           'meta_title'=>'required',
           'meta_description'=>'required',
           'meta_keyword'=>'required',
           'original_price'=>'required',
           'selling_price'=>'required',
           'shipping_price'=>'required',
           'quantity'=>'required',
           'status'=>'nullable',
           'tranding'=>'nullable',
           'image' =>  'nullable',
         ]);


         
         $category = Category::findOrFail($validated['category_id']);

       $product =  $category->products()->create([
             'category_id'=>$validated['category_id'],
             'name'=>$validated['product_name'],
             'slug'=>Str::slug($validated['product_code']),
             'brand'=>$validated['brand_id'],
             'small_description'=>$validated['product_description_small'],
             'original_price'=>$validated['original_price'],
             'selling_price'=>$validated['selling_price'],
             'shipping_price'=>$validated['shipping_price'],
             'quantity'=>$validated['quantity'],
             'trending'=>$request->tranding == true ? '1':'0',
             'featured'=>$request->featured == true ? '1':'0',
             'status'=>$request->status == true ? '1':'0',
             'meta_title'=>$validated['meta_title'],
             'meta_keyword'=>$validated['meta_keyword'],
             'meta_description'=>$validated['meta_description'],
             
         ]);

        if($request->hasFile('image')){
            $uploadPath = 'uploads/product-img/';
 
            $i = 1;

            foreach($request->file('image') as $imageFile){
                
                $extention = $imageFile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extention;
                $imageFile->move($uploadPath, $filename);
                $finalImagePathName = $uploadPath.$filename;

    
                $product->productImages()->create([
            'product_id'=> $product->id,
            'image'=> $finalImagePathName,
         ]);

            }
         }

         if($request->colors){
             foreach($request->colors as $key => $color){
                   $product->productColors()->create([

                    'product_id'=>$product->id,
                    'color_id'=>$color,
                    'quantity'=>$request->colorquantity[$key] ?? 0
                    
                   ]);
             }
         }

         return redirect()->route('view.products')->with('success','The product was created successfully!');

       }



          public function  edit(Product $products){

            if(!Gate::allows('admin')){
                abort(403);
            }

            $categories = Category::all();

            $brands = Brand::all();

            

           $product_color = $products->productColors->pluck('color_id')->toArray();

           $colors = Color::whereNotIn('id',$product_color)->get();

           $TaskCount = Task::all()->count();
 
            return view('admin.update-product', compact('products','categories','brands','product_color','colors','TaskCount'));
          }

           
            
          public function deleteProductImage(int $product_image_id){


            if(!Gate::allows('admin')){
                abort(403);
            }
               
            $productImage = ProductImage::findOrFail($product_image_id);

            if(File::exists($productImage->image)){
                File::delete($productImage->image);
            }


            $productImage->delete();


            return redirect()->back()->with('success','The image of the product was deleted successfully!');



          }



          public function updateProduct(int $product_id, Request $request){

            if(!Gate::allows('admin')){
                abort(403);
            }

            $validated = $request->validate([
                'category_id' =>'required',
                'product_name'=>'required',
                'product_code'=>'required',
                'brand_id'=>'required',
                'product_description_small'=>'required',
                'meta_title'=>'required',
                'meta_description'=>'required',
                'meta_keyword'=>'required',
                'original_price'=>'required',
                'selling_price'=>'required',
                'shipping_price'=>'required',
                'quantity'=>'required',
                'status'=>'nullable',
                'tranding'=>'nullable',
                'image' =>  'nullable',
              ]);

              $product = Category::findOrFail($validated['category_id'])
                                   ->products()->where('id',$product_id)->first();


               if($product){
                $product->update([
                    'category_id'=>$validated['category_id'],
                    'name'=>$validated['product_name'],
                    'slug'=>Str::slug($validated['product_code']),
                    'brand'=>$validated['brand_id'],
                    'small_description'=>$validated['product_description_small'],
                    'original_price'=>$validated['original_price'],
                    'selling_price'=>$validated['selling_price'],
                    'shipping_price'=>$validated['shipping_price'],
                    'quantity'=>$validated['quantity'],
                    'trending'=>$request->tranding == true ? '1':'0',
                    'featured'=>$request->featured == true ? '1':'0',
                    'status'=>$request->status == true ? '1':'0',
                    'meta_title'=>$validated['meta_title'],
                    'meta_keyword'=>$validated['meta_keyword'],
                    'meta_description'=>$validated['meta_description'],

                ]);

                if($request->hasFile('image')){
                    $uploadPath = 'uploads/product-img/';
         
                    $i = 1;
        
                    foreach($request->file('image') as $imageFile){
                        
                        $extention = $imageFile->getClientOriginalExtension();
                        $filename = time().$i++.'.'.$extention;
                        $imageFile->move($uploadPath, $filename);
                        $finalImagePathName = $uploadPath.$filename;
        
            
                        $product->productImages()->create([
                    'product_id'=> $product->id,
                    'image'=> $finalImagePathName,
                 ]);


                 
        
                    }
                 }


                 if($request->colors){
                    foreach($request->colors as $key => $color){
                          $product->productColors()->create([
       
                           'product_id'=>$product->id,
                           'color_id'=>$color,
                           'quantity'=>$request->colorquantity[$key] ?? 0
                           
                          ]);
                    }
                }


                 return redirect()->route('view.products')->with('success','The product was updated successfully!');

               }
                else
                {
                    return redirect()->route('view.products')->with('error','No such Id product found!');
                }
               

          }


          public function deleteProduct(int $product_id){
            if(!Gate::allows('admin')){
                abort(403);
            }

            $product = Product::findOrFail($product_id);
            

            if($product->productImages){
                foreach($product->productImages as $images){
                    if(File::exists($images->image)){
                        File::delete($images->image);
                    }
                }
            }


            $product->delete();

            return redirect()->back()->with('success','The product was deleted successfully');
          }
          

          public function deleteProductColor(int $product_color_id){

            if(!Gate::allows('admin')){
                abort(403);
            }
   
            $colorProduct = ProductColor::findOrFail($product_color_id);

            $colorProduct->delete();

            return redirect()->back()->with('success','The product color was deleted successfully!');

          }


          public function addCartProduct(Request $request ,int $product_id){


            $validated= request()->validate([
               'product_color'=>'nullable',
               'quantity'=>'required',
            ]);

             $product = Product::findOrFail($product_id);
           


             if($product){

                if(Auth::check()){

                    if($product->where('id',$product_id)->where('status','0')->exists()){

                        if($product->productColors()->count() > 1){



                           if($request->get('product_color') != NULL){
                                 
                               Cart::create([
                                 'user_id'=> auth()->user()->id,
                                 'product_id'=>$product_id,
                                 'product_color_id'=>$request->get('product_color'),
                                 'quantity	'=>$request->get('quantity'),
                               ]);

                               return redirect()->back();

                           }else{
                            return redirect()->back();
                           }

                        }else{

                            

                                if($product->quantity>0){

                                Cart::create([
                                    'user_id'=> auth()->user()->id,
                                    'product_id'=>$product_id,
                                    'product_color_id'=>$request->get('product_color'),
                                    'quantity'=>$request->get('quantity'),
                                  ]);


                                  return redirect()->back();

                        }else{
                            return redirect()->back();
                        }      


                            

                            

                        }

                        

                    }else{

                        return redirect()->back();
                    }

            }else{
                return redirect()->back();
            }

             }

            
          }


          
}