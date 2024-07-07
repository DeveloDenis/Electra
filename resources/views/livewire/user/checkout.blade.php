<div>
    <div class="py-3 py-md-4 checkout">
        <div class="container">
            <h4>Checkout</h4>
            <hr>
              @if($this->totalProductAmount != '0')
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="shadow bg-white p-3">
                        <h4 class="text-primary">
                            Item Total Amount :
                            <span class="float-end">${{$this->totalProductAmount}}.00</span>
                        </h4>
                        <hr>
                        <small>* Items will be delivered in 3 - 5 days.</small>
                        <br/>
                        <small>* Tax and other charges are included </small>
                    </div>
                </div>


                @if(session()->has('success'))
                              
                <div class="alert alert-success alert-dismissible fade show">
                  {{session('success')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>


                @endif

                @if(session()->has('error'))
                    
                <div class="alert alert-danger alert-dismissible fade show">
                  {{session('error')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>


                @endif 





                <div class="col-md-12 text-center">


                    <h1 class="display-6 text-warning"><i class="fa-solid fa-triangle-exclamation"></i>!This site is a test website where I show my qualities as a web developer! As a result, the payment methods are put in test mode and if you want to test them, I recommend you to use a test account!<i class="fa-solid fa-triangle-exclamation"></i></h1>

                </div>


                <div class="col-md-12">
                    <div class="shadow bg-white p-3">
                        <h4 class="text-primary">
                            Basic Information
                        </h4>
                        <hr>

                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Full Name</label>
                                    <input type="text" id="fullname" wire:model.defer="fullname"  class="form-control" placeholder="Enter Full Name" />
 
                                    @error('fullname')

                                    <div class="text-danger">{{$message}}</div>

                                    @enderror
                                    
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Phone Number</label>
                                    <input type="number" id="phone"  wire:model.defer="phone" name="phone" class="form-control" placeholder="Enter Phone Number"  autocomplete="off"/>

                                    
                                    @error('phone')

                                    <div class="text-danger">{{$message}}</div>

                                    @enderror 

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Email Address</label>
                                    <input type="email" id="email" wire:model.defer="email"  class="form-control" placeholder="Enter Email Address" />

                                    @error('email')

                                    <div class="text-danger">{{$message}}</div>

                                    @enderror 
                                    
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Pin-code (Zip-code)</label>
                                    <input type="number" id="pincode" wire:model.defer="pincode" name="pincode"  class="form-control" placeholder="Enter Pin-code" autocomplete="off"/>

                                    @error('pincode')

                                    <div class="text-danger">{{$message}}</div>

                                    @enderror 

                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Your Country:</label>
                                    <select name="country"  wire:model="country" class="form-select" id="country">
                                           <option selected >Chose Your Country</option>
                                           <option value="Belgium">Belgium</option>
                                           <option value="France">France</option>
                                           <option value="Germany">Germany</option>
                                           <option value="Romania">Romania</option>
                                           <option value="Itali">Itali</option>
                                           <option  value="United Kingdom">United Kingdom</option>
                                           <option value="Switzerland">Switzerland</option>
                                           
                                    </select>

                                    @error('country')

                                    <div class="text-danger">{{$message}}</div>

                                    @enderror
                                    
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Your City</label>
                                    <input type="text" name="city" id="city"   wire:model="city"  class="form-control" placeholder="Enter your City Address" />

                                    @error('city')

                                    <div class="text-danger">{{$message}}</div>

                                    @enderror 

                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Your Street</label>
                                    <input type="text" name="street" id="street" wire:model="street"   class="form-control" placeholder="Enter your Street Address" />

                                    @error('street')

                                    <div class="text-danger">{{$message}}</div>

                                    @enderror 

                                </div>

                                <div class="col-md-12 mb-3" wire:ignore>
                                    <label>Select Payment Mode: </label>
                                    <div class="d-md-flex align-items-start">
                                        <div class="nav col-md-3 flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <button  wire:loading.attr="disabled" class="nav-link active fw-bold" id="cashOnDeliveryTab-tab" data-bs-toggle="pill" data-bs-target="#cashOnDeliveryTab" type="button" role="tab" aria-controls="cashOnDeliveryTab" aria-selected="true">Cash on Delivery</button>
                                            <button  wire:loading.attr="disabled" class="nav-link fw-bold" id="onlinePayment-tab" data-bs-toggle="pill" data-bs-target="#onlinePayment" type="button" role="tab" aria-controls="onlinePayment" aria-selected="false">Online Payment</button>
                                        </div>
                                        <div class="tab-content col-md-9" id="v-pills-tabContent">
                                            <div class="tab-pane active show fade" id="cashOnDeliveryTab" role="tabpanel" aria-labelledby="cashOnDeliveryTab-tab" tabindex="0">
                                                <h6>Cash on Delivery Mode</h6>
                                                <hr/>
                                                <button type="button" wire:loading.attr="disabled" wire:click="codOrder"  class="btn btn-primary">
                                                    <span wire:loading.remove wire:target="codOrder">
                                                        Place Order (Cash on Delivery)
                                                    </span>


                                                    <span  wire:target="codOrder">
                                                        Placing Order 
                                                    </span>
                                                    
                                                </button>

                                            </div>
                                            <div class="tab-pane fade" id="onlinePayment" role="tabpanel" aria-labelledby="onlinePayment-tab" tabindex="0">
                                                <h6>Online Payment Mode</h6>
                                                <hr/>
                                                <!--<button  wire:loading.attr="disabled" type="button" class="btn btn-warning">Pay Now (Online Payment)</button>-->
                                                <div >

                                                      <div  id="paypal-button-container" class="paypal-button-container"></div>

                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

            @else

              <div class="card card-body shadow text-center p-md-5">
                <h4>No items in cart!</h4>
                <a href="{{route('user.shop')}}" class="btn btn-warning">Shop Now</a>
              </div>

            @endif
            
        </div>
    </div> 


@push('scripts')


<script src="https://www.paypal.com/sdk/js?client-id=AX1UEWcTg0LQj_F-TXh3okyXpUg2dz2OPQeuTgT_uVJapMqe5khpjhXNhRv0ANH88N1ECENgoogKDfwU&currency=USD"></script>



    <script>

       

             paypal.Buttons({


                

                onClick: function() {

                    if(!document.getElementById('fullname').value
                      ||!document.getElementById('phone').value
                      ||!document.getElementById('email').value
                      ||!document.getElementById('pincode').value
                      ||!document.getElementById('country').value
                      ||!document.getElementById('city').value
                      ||!document.getElementById('street').value){
                        

                       @this.validationForAll();
                       return false;
                    }else{

                        @this.set('fullname', document.getElementById('fullname').value);
                        @this.set('phone', document.getElementById('phone').value);
                        @this.set('email', document.getElementById('email').value);
                        @this.set('pincode', document.getElementById('pincode').value);
                        @this.set('country', document.getElementById('country').value);
                        @this.set('city', document.getElementById('city').value);
                        @this.set('street', document.getElementById('street').value);
                    }
                },

                createOrder: (data, actions) => {
                    return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: "{{$this->totalProductAmount}}"
                                }
                            }]
                    });
                },


                onApprove: (data, actions) => {
                    return actions.order.capture().then(function(orderData){


                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                        const transaction = orderData.purchase_units[0].payments.captures[0];

                        if(transaction.status == 'COMPLETED'){
                            
                            @this.paidOnlineOrder(transaction.id);
                        }
                        //alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);

                    });
                }
             }).render('#paypal-button-container');

        </script>

@endpush

    
</div>




