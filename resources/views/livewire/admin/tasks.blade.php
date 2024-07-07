<div>

    

    



   
    <div class="row">

        <div class="col-md-12">
    
            <div class="login ">
    
    
                <h1 class="text-center">Create your Task</h1>


                @if(session()->has('success'))
                          
                <div class="alert alert-success alert-dismissible fade show">
                  {{session('success')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>


                @endif
    
                <form wire:submit="store" method="POST">
    
                   <div class="form-group">
                    <label class="form-label" for="title">Title</label>
                    <input wire:model="title" class="form-control" type="text" name="title" autocomplete="off">

                    @error('title')


                    <div class="text-danger">{{$message}}</div>


                    @enderror
                   </div>
    
    
                   <div class="form-group ">
                    <label class="form-label" for="content">Content</label>
                    <input class="form-control" wire:model="content" type="text" name="content"  autocomplete="off">

                    @error('content')


                    <div class="text-danger">{{$message}}</div>


                    @enderror
                   </div>
    
    
                  <input class="btn btn-primary w-100" type="submit" value="Add">
    
                </form>
    
        </div>
    </div>


    @forelse($tasks as $task)
    <div class="row mt-3">
    
        <div class="col-md-12 col">
    
            <div class="content">
    
    
                


                    @if($task->completed)
    
                    <input type="checkbox" wire:click="untoggle({{$task->id}})" name="check" checked><br/>

                    @else
                    <input type="checkbox" wire:click="toggle({{$task->id}})" name="check" ><br/>
                        
                    @endif

                    @if($EditingToDoID === $task->id)
                    <input wire:model="newTitle" type="text" name="newTitle" placeholder="Task Title" class="bg-light-subtle text-sm w-full p-2" value="Task Title"> <br/>


                     @error('newTitle')
                    
                     <div class="text-danger">{{$message}}</div>

                     @enderror

                    <input wire:model="newContent" type="text" name="newContent" laceholde="Task Content" class="bg-light-subtle text-sm w-full p-2" value="Task Content"><br/>

                          @error('newContent')

                            <div class="text-danger">{{$message}}</div>

                          @enderror
                   
                    @else


                    <h4>{{$task->title}}</h4>
                     
                    <p>{{$task->content}}</p>

                    @endif

                    <small>{{$task->created_at->format('m-d-Y')}}</small><br/>


                    @if($EditingToDoID === $task->id)
      

                    <button wire:click="update"   class=" btn btn-success btn-sm float-end me-2"   > Save </button>
                      
                    <button wire:click="cancelEdit"  class=" btn btn-danger btn-sm float-end me-2"   > Cancel </button>
                 @else

                 <button wire:click="delete({{$task->id}})" class=" btn btn-outline-danger btn-sm float-end "><i class="fa-solid fa-trash"></i></button>
                 <button  wire:click="edit({{$task->id}})" class=" btn btn-outline-success btn-sm float-end me-2"   ><i class="fa-solid fa-pen-to-square"></i> </button>

                 @endif
    
    
    
    
    </div>
    
    
    
    
            </div>
            
        </div>

        @empty

        <div class="row">

           <div class="col-md-12">

            <p class="text-center h5">No Tasks Today!</p>


           </div>

        </div>

        @endforelse
    

        {{$tasks->links('livewire-pagination-links')}}


    

    

</div>
