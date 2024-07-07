@extends('extenders.layout')

@section('title', 'Create Product')


@section('style')

<style>

.container{
    margin-top: 80px;
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
       
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="productDetails-tab" data-bs-toggle="tab" data-bs-target="#productDetails-tab-pane" type="button" role="tab" aria-controls="productDetails-tab-pane" aria-selected="true">Product Details</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="SEOtags-tab" data-bs-toggle="tab" data-bs-target="#SEOtags-tab-pane" type="button" role="tab" aria-controls="SEOtags-tab-pane" aria-selected="false">SEO Tags</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="productPrice-tab" data-bs-toggle="tab" data-bs-target="#productPrice-tab-pane" type="button" role="tab" aria-controls="productPrice-tab-pane" aria-selected="false">Product Price</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="productImage-tab" data-bs-toggle="tab" data-bs-target="#productImage-tab-pane" type="button" role="tab" aria-controls="productImage-tab-pane" aria-selected="false">Product Image</button>
          </li>
  
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="productColor-tab" data-bs-toggle="tab" data-bs-target="#productColor-tab-pane" type="button" role="tab" aria-controls="productColor-tab-pane" aria-selected="false">Product Color</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="productDetails-tab-pane" role="tabpanel" aria-labelledby="productDetails-tab" tabindex="0">
  <form action="{{route('product.post')}}" method="post"enctype="multipart/form-data">
            @csrf
              <div class="row mt-5">
                  <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
   
                    
                     <h2 class="text-center pt-3">Put your product details</h2>
                     <p class="text-center text-muted lead">Set details of your product!</p>
  
                      
  
  
                     <div class="form-group my-3">
                     <label class="font-weight-bold">Category</label>
     
                     <select  class="form-control select" name="category_id">
                         <option selected disabled>Set the product Category</option>
                         @foreach($categories as $category)
                          <option name="category_id"  value="{{$category->id}}" >{{$category->name}}</option>
                          @endforeach
                     </select>
     
                    </div>
     
                     
                         <div class="input-group">
                              <span class="input-group-text"><i class="fa-brands fa-product-hunt"></i></span>
                              <input type="text" name="product_name" class="form-control" placeholder=" Product Name" /><br>
                              @error('product_name')
                                  <div class="text-danger">
                                    {{$message}}
                                  </div>
                              @enderror
                         </div> 
     
                         
     
                         <div class="input-group my-3">
                          <span class="input-group-text"><i class="fa-solid fa-barcode"></i></span>
                          <input type="text" name="product_code" class="form-control" placeholder="Product Code" /><br>
                          @error('product_code')
                          <div class="text-danger">
                            {{$message}}
                          </div>
                      @enderror
                     </div> 
  
  
  
                     <div class="form-group my-3">
                      <label class="font-weight-bold">Brand</label>
      
                      <select  class="form-control select" name="brand_id">
                          <option selected disabled>Set the product Brand</option>
                          @foreach($brands as $brand)
                           <option name="brand_id"  value="{{$brand->name}}" >{{$brand->slug}}</option>
                           @endforeach
                      </select>
      
                     </div>
     
  
                     
     
                    
  
                    
     
     
                <div class="input-group my-3 myInputD d-grid">
                 <span class="input-group-text"> <i class="fa-solid fa-keyboard" ></i></span>
                 <textarea type="text"  placeholder="Small product description" name="product_description_small" rows="4"></textarea><br>
                 @error('product_description_small')
                 <div class="text-danger">
                   {{$message}}
                 </div>
             @enderror
            </div> 
  
            
     
               
     
     
               
           
     
                    
                  </div>
             </div>
  
          </div>
          <div class="tab-pane fade" id="SEOtags-tab-pane" role="tabpanel" aria-labelledby="SEOtags-tab" tabindex="0">
                
              <div class="row mt-5">
                  <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
                     <h2 class="text-center pt-3">SEO Tags</h2>
                     <p class="text-center text-muted lead">Set SEO tags!</p>
  
  
                     
     
                     
                         <div class="input-group">
                              <span class="input-group-text"><i class="fa-brands fa-meta"></i></span>
                              <input type="text" name="meta_title" class="form-control" placeholder="Meta Title" /><br>
                              @error('meta_title')
                              <div class="text-danger">
                                {{$message}}
                              </div>
                          @enderror
                         </div> 
     
     
     
                <div class="input-group my-3 myInputD d-grid">
                 <span class="input-group-text"> <i class="fa-solid fa-keyboard" ></i></span>
                 <textarea type="text"  placeholder="Meta description" name="meta_description"></textarea><br>
                 @error('meta_description')
                 <div class="text-danger">
                   {{$message}}
                 </div>
             @enderror
            </div> 
  
            <div class="input-group my-3 myInputD d-grid">
              <span class="input-group-text"> <i class="fa-solid fa-keyboard" ></i></span>
              <textarea type="text" class="" placeholder="Meta Keyord" name="meta_keyword"></textarea><br>
              @error('meta_keyword')
              <div class="text-danger">
                {{$message}}
              </div>
          @enderror
         </div> 
     
               
     
               
           
     
                    
                  </div>
             </div>  
  
          </div>
          <div class="tab-pane fade" id="productPrice-tab-pane" role="tabpanel" aria-labelledby="productPrice-tab" tabindex="0">
  
              <div class="row mt-5">
                  <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
                     
                      <h2 class="text-center pt-3">Product Price</h2>
                     <p class="text-center text-muted lead">Set Product  Price!</p>
  
                      <div class="input-group">
                          <span class="input-group-text"><i class="fa-solid fa-tag"></i></span>
                          <input type="number" name="original_price" class="form-control" placeholder="Original price" /><br>
                          @error('original_price')
                          <div class="text-danger">
                            {{$message}}
                          </div>
                      @enderror
                     </div> 
          
          
                     <div class="input-group my-3">
                      <span class="input-group-text"><i class="fa-solid fa-tag"></i></span>
                      <input type="number" name="selling_price" class="form-control" placeholder="Selling Price" /><br>
                      @error('selling_price')
                      <div class="text-danger">
                        {{$message}}
                      </div>
                  @enderror
                 </div> 
          
                 <div class="input-group my-3">
                  <span class="input-group-text"><i class="fa-solid fa-tag"></i></span>
                  <input type="number" name="shipping_price" class="form-control" placeholder="Shipping Price" /><br>
                  @error('shipping_price')
                  <div class="text-danger">
                    {{$message}}
                  </div>
              @enderror
             </div> 
          
             <div class="input-group mt-3">
              <span class="input-group-text"><i class="fa-solid fa-tag"></i></span>
              <input type="number" name="quantity" class="form-control" placeholder="Quantity" /><br>
              @error('quantity')
              <div class="text-danger">
                {{$message}}
              </div>
          @enderror
          </div> 
  
          <div class="col-md-6 mb-3">
            <label>Status</label><br>
            <input type="checkbox" name="status"  />
            
          </div>
  
  
  
  
  
  
          <div class="col-md-6 mb-3">
            <label>Tranding</label><br>
            <input type="checkbox" name="tranding"  />
           
          </div>
  
  
          <div class="col-md-6 mb-3">
            <label>Featured</label><br>
            <input type="checkbox" name="featured"  />
           
          </div>
          
  
                      </div>
             </div> 
  
          </div>
  
          <div class="tab-pane fade" id="productImage-tab-pane" role="tabpanel" aria-labelledby="productImage-tab" tabindex="0">
  
              <div class="row mt-5">
                  <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
                     
                      <h2 class="text-center pt-3">Product Images</h2>
                     <p class="text-center text-muted lead">Set Product  Images!</p>
  
                     <div class="input-group my-3">
                      
                      <span class="input-group-text"> <i class="fa-solid fa-image" ></i></span>
                      <input type="file"  name="image[]" multiple  class="form-control" >
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
                
  
                  <div class="input-group my-3 d-grid ">
              <input type="submit" class="butt btn btn-primary" value="Submit">
              
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
