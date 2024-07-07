<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    
   

    public function prehome(User $user){

       
  if(!Gate::allows('user.ban',$user)){
            abort(403, 'You are benned');
        }

        return $this->home(auth()->user());
    }


     public function home(User $user){
        
           

$categories = Category::where('status','0')->get();
          
           $trendingProducts = Product::where('trending','1')->latest()->take(15)->paginate(30);

           $month = Carbon::now()->format('m');
           $year = Carbon::now()->format('Y');


           $newArrivals = Product::whereMonth('created_at',$month)->whereYear('created_at',$year)->latest()->take(16)->get();
           $featured = Product::where('featured','1')->latest()->take(16)->get();
  
           if(Auth::check()){
            
            $cartCount = Cart::where('user_id',auth()->user()->id);

            return view('user.menu',compact('categories','cartCount','trendingProducts','newArrivals','featured'));
        }else{
            return view('user.menu',compact('categories','trendingProducts', 'newArrivals','featured'));
        }

           
        
          
        
        }






        
    

    public function viewShop(){

        
           $trendingProducts = Cache::remember('trendingProducts', 10 , function(){


            return Product::with('productImages')->where('trending','1')->where('status','0')->latest()->take(15)->get();
            
           });

          

           $products = Cache::remember('products', 10, function(){

             return  Product::with('productImages')->where('status','0')->paginate(44);

           });


          

          
          
          if(Auth::check()){
            $cartCount = Cart::where('user_id',auth()->user()->id);
            return view('user.shop',compact('cartCount','trendingProducts','products'));
          }else{
            return view('user.shop',compact('products','trendingProducts'));
          }

        
    }

    public function viewProduct($product_id){

          

       $product = Product::with('productImages','productColors','specificationGeneral','specificationDisplay','specificationCase','specificationMemory','specificationMotherboard','specificationMultyMedia','specificationPhotoVideo','specificationProcessor','specificationStorage','specificationVideoCard')->where('id',$product_id)->first();


       


        $products = Product::with('productImages')->orderBy('created_at','DESC')->where('status','0')->where('brand',$product->brand)->take(20)->get();
        
        
        $ratings = Rating::where('prod_id', $product_id)->get();
         $rating_sum = Rating::where('prod_id', $product_id)->sum('stars_rated');
         

         if($ratings->count() > 0){

            $rating_value = $rating_sum/$ratings->count();

         }
         else{
            $rating_value = 0;
         }
         
         

        if(Auth::check()){
         $cartCount = Cart::where('user_id',auth()->user()->id);

         $user_rating = Rating::where('prod_id', $product_id)->where('user_id', Auth::id())->first();
         
        
         return view('user.view-product',compact('product','cartCount','products','ratings','rating_value','user_rating'));
        }
        else{
         return view('user.view-product',compact('product','products','ratings','rating_sum','rating_value'));
        }

        
       


       
    

        
    }


    public function colections(){


        $categories = Category::where('status','0')->get();

        if(Auth::check()){
            $cartCount = Cart::where('user_id',auth()->user()->id);
           return view('user.collections',compact('categories','cartCount'));
        }else{
            return view('user.collections',compact('categories'));
        }

       
    }

    public function shopCategory(Request $request,  $category_slug){

        $category = Category::where('slug',$category_slug)->first();

        if(Auth::check()){
            $cartCount = Cart::where('user_id',auth()->user()->id);

            if($category){



           

            return view('user.shop-category',compact('category','cartCount'));
           }else{
                 return redirect()->back();
           }

        }else{

            if($category){



           

                return view('user.shop-category',compact('category'));
               }else{
                     return redirect()->back();
               }

        }

           

        
    }


    
       
    public function newArrival(){


        $month = Carbon::now()->format('m');
        $year = Carbon::now()->format('Y');

        $newArrivalsProduct = Product::where('status','0')->whereMonth('created_at',$month)->whereYear('created_at',$year)->latest()->take(16)->get();

              
        if(Auth::check()){
            $cartCount = Cart::where('user_id',auth()->user()->id);
           return view('user.new-arrival',compact('newArrivalsProduct','cartCount'));
        }else{
            return view('user.new-arrival',compact('newArrivalsProduct'));
        }


        
    }


    public function featuredProducts(){


        $featuredProducts = Product::where('featured','1')->latest()->take(16)->get();

        if(Auth::check()){
            $cartCount = Cart::where('user_id',auth()->user()->id);
            return view('user.featured-view',compact('cartCount','featuredProducts'));
        }else{
            return view('user.featured-view',compact('featuredProducts'));
        }
    }


    public function benefits(){


        if(Auth::check()){

            $cartCount =  Cart::where('user_id',auth()->user()->id);

            return view('user.benefits',compact('cartCount'));
        }else{

            return view('user.benefits');
        }
    }


    public function discount(){


        $products = Product::where('status','0')->where('selling_price','<=', DB::raw('original_price / 2'))->paginate(12);


        



            
       


        

        if(Auth::check()){

            $cartCount =  Cart::where('user_id',auth()->user()->id);

            return view('user.discount',compact('cartCount','products'));
         
        }else{


            return view('user.discount',compact('products'));
        }




        
    }


    public function return(){


        if(Auth::check()){


            $cartCount =  Cart::where('user_id',auth()->user()->id);

            return view('user.return',compact('cartCount'));

        }else{


            return view('user.return');
        }

        
    }
    
}
