<div>
    

    <div class="row ">
        <h3 class="ms-4">View Reviews:</h3>

        <div class="col-md-12 ms-4 " style="background-color: #f9f7f7; width:100%; ">
            <div class="row mt-4">
                <div class="col-md-4">

                  @if(session()->has('danger'))
                          
                  <div class="alert alert-danger alert-dismissible fade show">
                    {{session('danger')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>


                  @endif


                    @auth()
                      <form wire:submit="createNewComment" method="POST">
                       @csrf
                        
                       <label for="comment" class="h5 label-form" style="font-weight: 600;">Write your review about the product </label>

                       <input wire:model="comment" name="comment"  type="text" class="form-control" />
                       @error('comment')

                         <div class="text-danger">{{$message}}</div>

                       @enderror
                       <button class="btn btn-primary mt-2" type="submit"><i class="fa-solid fa-share"></i>POST</button>
                    
                   </form>

                   @endauth

            @guest()

                  <p class="h5 ">To Write your review you must to <a href="{{route('user.login')}}">LogIn</a> to your account!</p>

            @endguest
                </div>
            </div>
             <div class="row my-4" >

               @forelse($comments as $comment)
               <div class="row mb-3">

                <div class="col-md-3">
                    <h6><i class="fa-solid fa-user"></i>{{$comment->user->name}}</h6>
                    
                    <!--Stars-->

                   @php 

                   $rating = App\Models\Rating::where('prod_id',$product->id)->where('user_id',$comment->user->id)->first();

                   @endphp

                    @if($rating)

                    @php

                    $user_rated = $rating->stars_rated

                    @endphp

                      @php
                        for($i = 1; $i <= 5; $i++) {
                        if($i <= $user_rated) {
                          echo '<i class="fa fa-star checked"></i>';
                           } else {
                           echo '<i class="fa fa-star"></i>';
                             }
                              }
                     @endphp

                    @else


                    <h6>Not Rated</h6>
      

                    @endif

                    <small>Reviewed on {{$comment->created_at->format('d M Y')}}</small>
                    <!--End Stars-->

                   <p>{{$comment->content}}</p>


                    @if(Auth::check())
                   @if($comment->user->id == Auth::user()->id || Auth::user()->is_admin == '1')
                   <a wire:click="deleteComment({{$comment->id}})" class="btn btn-danger btn-sm">Delete</a>
                   @else


                   @endif
                   
                   @endif
                   
                </div> 


               </div>
                

                @empty

                <span class="text-center h6">Reviews don't exists on this product!</span>

                @endforelse
             </div>

             {{$comments->links('livewire-pagination-links')}}
        </div>
      </div>


</div>
