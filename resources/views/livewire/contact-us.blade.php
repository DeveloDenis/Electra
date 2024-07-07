<div>

 
    <div class="row">
        <div class="col-lg-9 m-auto ">
          <div class="row">
            <div class="col-lg-7">
              <h6>Address</h6>
              <p>{{$appSetting->address ?? 'address'}}</p>
            
            
            
              <h6>Phone</h6>
              <p>{{$appSetting->phone1 ?? 'phone number'}}</p>
            
            
            
              
              <h6>Email</h6>
              <p>{{$appSetting->email1 ?? 'email'}}</p>
            </div>
              
            
            <div class="col-lg-7">

              <div class="row " >

                @if(session()->has('success'))
                          
                  <div class="alert alert-success alert-dismissible fade show">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>


                  @endif
                
                <div class="col-lg-6">

                  
                    <form wire:submit="contactUs"   method="POST">
                        @csrf
                  <input type="text"name="first_name" wire:model="first_name" class="form-control bg-light" placeholder="First Name">

                  @error('first_name')
                        <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>

                <div class="col-lg-6 mb-3">
                  <input type="text" name="last_name" wire:model="last_name" class="form-control bg-light" placeholder="Last Name">

                  @error('last_name')

                  <div class="text-danger">{{$message}}</div>

                  @enderror
                </div>
              </div>

              <div class="col-lg-6 mb-3">
                <input type="email" name="email" wire:model="email" class="form-control bg-light" placeholder="Email Address">

                @error('email')

                  <div class="text-danger">{{$message}}</div>

                  @enderror
              </div>

              
            </div>

              <div class="row">
                <div class="col-lg-12 py-3">
                  <textarea name="" name="subject" wire:model="subject" class="form-control bg-light" placeholder="Enter subject" id="" cols="30" rows="10"></textarea>

                  @error('subject')

                  <div class="text-danger">{{$message}}</div>

                  @enderror
                </div>
                
              </div>

              <button type="submit" class="btn1">Submit</button>
            </form>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  
</div>
