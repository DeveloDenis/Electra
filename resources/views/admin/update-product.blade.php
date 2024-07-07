@extends('extenders.layout')

@section('title','Update Product')

@section('style')
<style>



.wrapper{
            border-top:04px solid green;

        }

        
        .a{
            color:green;
        }

html,body{
  width:100%;
  height:100%;
  margin:0px;
  padding:0px;
  overflow-x:hidden;
}


.container1{
  margin-top:100px;
}


</style>
@endsection

@section('content')

@include('extenders.navbar-admin')
     

<div class="container1">

  <div class="row my-5">
    <form action="{{route('update.product',$products->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item border " role="presentation">
      <button class="nav-link active" id="productDetails-tab" data-bs-toggle="tab" data-bs-target="#productDetails-tab-pane" type="button" role="tab" aria-controls="productDetails-tab-pane" aria-selected="true">New Product Details</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="SEOtags-tab" data-bs-toggle="tab" data-bs-target="#SEOtags-tab-pane" type="button" role="tab" aria-controls="SEOtags-tab-pane" aria-selected="false">New SEO Tags</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="productPrice-tab" data-bs-toggle="tab" data-bs-target="#productPrice-tab-pane" type="button" role="tab" aria-controls="productPrice-tab-pane" aria-selected="false">New Product Price</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="productImage-tab" data-bs-toggle="tab" data-bs-target="#productImage-tab-pane" type="button" role="tab" aria-controls="productImage-tab-pane" aria-selected="false">New Product Image</button>
    </li>
    <li class="nav-item" role="presentation">
     <button class="nav-link" id="productColor-tab" data-bs-toggle="tab" data-bs-target="#productColor-tab-pane" type="button" role="tab" aria-controls="productColor-tab-pane" aria-selected="false">Product Color</button>
   </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active border p-3" id="productDetails-tab-pane" role="tabpanel" aria-labelledby="productDetails-tab" tabindex="0">
 
        <div class="row mt-5">
            <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
                  
 
             @if(session()->has('success'))
                           
                       <div class="alert alert-success alert-dismissible fade show">
                         {{session('success')}}
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>
 
 
                       @endif
              
               <h2 class="text-center pt-3">Update your product details</h2>
               <p class="text-center text-muted lead">Update your product details!</p>
 
 
               <div class="form-group my-3">
               <label class="font-weight-bold">New Category</label>
 
               <select  class="form-control select" name="category_id">
                   <option selected disabled>Select the new category</option>
                      @foreach($categories as $category)
                    <option name="product_type" value="{{$category->id}}"  {{$category->id == $products->category_id ? 'selected':''}}>{{$category->name}}</option>
                    @endforeach
               </select>
 
              </div>
 
               
                   <div class="input-group">
                        <span class="input-group-text"><i class="fa-brands fa-product-hunt"></i></span>
                        <input type="text" name="product_name" class="form-control" placeholder="New Product Name" value="{{$products->name}}"  />
                        
                   </div> 
 
                   
 
                   <div class="input-group my-3">
                    <span class="input-group-text"><i class="fa-solid fa-barcode"></i></span>
                    <input type="text" name="product_code" class="form-control"  placeholder="New Product Code" value="{{$products->slug}}" />
                    
               </div> 
 
 
 
               <div class="form-group my-3">
                <label class="font-weight-bold">Brand</label>
 
                <select  class="form-control select" name="brand_id">
                    <option selected disabled>Select the new Brand</option>
                      @foreach($brands as $brand )
                     <option name="product_type" value="{{$brand->name}}"  {{$brand->name == $products->brand ? 'selected':''}}>{{$brand->slug}}</option>
                      @endforeach
                </select>
 
               </div>
 
 
               
 
              
 
              
 
 
          <div class="input-group my-3 myInputD d-grid">
           <span class="input-group-text"> <i class="fa-solid fa-keyboard" ></i></span>
           <textarea type="text" class="" placeholder="New  product description" name="product_description_small">{{$products->small_description}}</textarea>
          
      </div> 
 
      
 
         
 
 
         
     
 
              
            </div>
       </div>
 
    </div>
    <div class="tab-pane fade border p-3" id="SEOtags-tab-pane" role="tabpanel" aria-labelledby="SEOtags-tab" tabindex="0">
          
        <div class="row mt-5">
            <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
               <h2 class="text-center pt-3">New SEO Tags</h2>
               <p class="text-center text-muted lead">Set New SEO tags!</p>
 
 
               
 
               
                   <div class="input-group">
                        <span class="input-group-text"><i class="fa-brands fa-meta"></i></span>
                        <input type="text" name="meta_title" class="form-control"  placeholder="New Meta Title" value="{{$products->meta_title}}" />
                       
                   </div> 
 
 
 
          <div class="input-group my-3 myInputD d-grid">
           <span class="input-group-text"> <i class="fa-solid fa-keyboard" ></i></span>
           <textarea type="text" class="" placeholder="New Meta description" name="meta_description">{{$products->meta_description}}</textarea>
           
      </div> 
 
      <div class="input-group my-3 myInputD d-grid">
        <span class="input-group-text"> <i class="fa-solid fa-keyboard" ></i></span>
        <textarea type="text" class="" placeholder="New Meta Keyord" name="meta_keyword">{{$products->meta_keyword}}</textarea>
       
   </div> 
 
         
 
         
     
 
              
            </div>
       </div>  
 
    </div>
    <div class="tab-pane fade border p-3"  id="productPrice-tab-pane" role="tabpanel" aria-labelledby="productPrice-tab" tabindex="0">
 
        <div class="row mt-5">
            <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
               
                <h2 class="text-center pt-3">New Product Price</h2>
               <p class="text-center text-muted lead">Set New Product  Price!</p>
 
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-tag"></i></span>
                    <input type="number" name="original_price" class="form-control" placeholder="New Original price" value="{{$products->original_price}}"  />
                   
               </div> 
    
    
               <div class="input-group my-3">
                <span class="input-group-text"><i class="fa-solid fa-tag"></i></span>
                <input type="number" name="selling_price" class="form-control" placeholder="New Selling Price"  value="{{$products->selling_price}}" />
                
           </div> 
    
           <div class="input-group my-3">
            <span class="input-group-text"><i class="fa-solid fa-tag"></i></span>
            <input type="number" name="shipping_price" class="form-control" placeholder="New Shipping Price" value="{{$products->shipping_price}}" />
            
       </div> 
    
       <div class="input-group mt-3">
        <span class="input-group-text"><i class="fa-solid fa-tag"></i></span>
        <input type="number" name="quantity" class="form-control" placeholder="New Quantity"  value="{{$products->quantity}}" />
        
    </div> 
 
    <div class="col-md-6 mb-3">
      <label>Status</label><br>
      <input type="checkbox" name="status" {{$products->status == '1' ? 'checked':''}} />
      
    </div>
 
 
 
    <div class="col-md-6 mb-3">
      <label>Featured</label><br>
      <input type="checkbox" name="featured" {{$products->featured == '1' ? 'checked':''}} />
     
    </div>
 
 
 
    <div class="col-md-6 mb-3">
     <label>Trending</label><br>
     <input type="checkbox" name="tranding" {{$products->trending == '1' ? 'checked':''}} />
    
   </div>
 
    
    
 
                </div>
       </div> 
 
    </div>
 
    <div class="tab-pane fade border p-3" id="productImage-tab-pane" role="tabpanel" aria-labelledby="productImage-tab" tabindex="0">
 
        <div class="row mt-5">
            <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
               
                <h2 class="text-center pt-3">New Product Images</h2>
               <p class="text-center text-muted lead">Set Product  Images!</p>
 
               <div class="input-group my-3">
                
                <span class="input-group-text"> <i class="fa-solid fa-image" ></i></span>
                <input type="file" name="image[]" multiple class="form-control" placeholder="Product Image" />
           </div> 
 
             <div>
              
              @if($products->productImages)
 
               <div class="row">
                 @foreach($products->productImages as $images)
 
                   <div class="col-md-2">
                     <img src="{{asset($images->image)}}" alt="Img" style="width:80px; height:80px;" class="me-4 border">
 
 
                     <a href="{{route('productImage.delete',$images->id)}}" class="btn btn-danger btn-sm">Remove</a>
                   </div>
                 @endforeach
               </div>
 
 
              @endif
 
            </div>
 
              
 
 
 
 
            
 
                </div>
       </div> 
 
     </div>
 
 
 
           <div class="tab-pane fade" id="productColor-tab-pane" role="tabpanel" aria-labelledby="productColor-tab" tabindex="0">
              
 
             <div class="row mt-5">
                       
               <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
 
                 <h2 class="text-center pt-3">Product Color</h2>
                 <p class="text-center text-muted lead">Optional</p>  
 
               <label>Select Color</label>
                   <hr/>
               <div class="row">
                 @forelse($colors as $color)
                     <div class="col-md-3">
                       <div class="p-2 border mb-3 w-90">
 
 Color: <input type="checkbox" name="colors[{{$color->id}}]" value="{{$color->id}}" />{{$color->name}}
                       <br/>
 
                       Quantity: <input type="number" name="colorquantity[{{$color->id}}]"  style="width:70px;;border:1px solid"/>
 
                       </div>
                       
                     </div>
                 @empty
                         <div class="col-md-12">
                           <h1>No colors found</h1>
                         </div>
                 @endforelse
               </div>
 
 
               <div class="table-responsive">
                 <table class="table table-sm table-bordered">
                   <thead>
                       <tr>
                             
                             <th>Color Name</th>
                             <th>Quantity</th>
                             <th>Delete</th>
                       </tr>
                   </thead>
                   <tbody>  
 
                     @foreach($products->productColors as $prodColor)
                            <tr class="prod-color-tr">
                             <td>
                               @if($prodColor->color)
                               {{$prodColor->color->name}}
                               
                               @else
                                  No color Found
                               @endif
                             </td>
                             <td>
                               <div class="input-group mb-3" style="width:150px; ">
                                      <p>{{$prodColor->quantity}}</p>
                                      
                               </div>
 
                             </td>
 
                             <td>
 
 
                               <a type="button" href="{{route('product.color.delete',$prodColor->id)}}"  class="deleteUpdateProductColorBtn btn btn-danger btn-sm text-whiter">Delete</a>
                             </td>
                            </tr>
 
                            @endforeach
                   </tbody>
                 </table>
               </div>
             
 
               <div class="input-group my-3 d-grid ">
           <input type="submit" class="butt btn btn-success" value="Update">
           
          </div>
             
         </div>
         </div>
 
 
             </div>
 
           </div>
 
      
 
       
       
    </form>
 
    </div>
  </div>
 </div>
 
 </div>
 

</div>




@endsection

