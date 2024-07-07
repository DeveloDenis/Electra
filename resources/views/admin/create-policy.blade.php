@extends('extenders.layout')


@section('title','Privacy & Policy Informations')

@section('style')

<style>
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




<div class="row container1 mb-3">
    <div class="col-md-12 grid-margin">


       
        <form action="{{route('policy-post')}}" method="post">
            @csrf
            <div class="row mb-5">
                <div class="col-md-4 "  >
                    <h3 >Privacy & Policy</h3>
                </div>
            </div>
            
            @if(session()->has('success'))
                          
            <div class="alert alert-success alert-dismissible fade show">
              {{session('success')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>


            @endif

            <div class="card-mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Privacy policy (Optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label>Paragraph 1</label>
                            <textarea   name="paragraph1" class="form-control">{{$policy->paragraph1 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <laravel>Paragraph 2</laravel>
                            <textarea   name="paragraph2" class="form-control" >{{$policy->paragraph2 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 3</label>
                            <textarea   name="paragraph3" class="form-control">{{$policy->paragraph3 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 4</label>
                             <textarea name="paragraph4"  class="form-control" rows="3">{{$policy->paragraph4 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 5</label>
                            <textarea name="paragraph5"  class="form-control" rows="3">{{$policy->paragraph5 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 6</label>
                            <textarea name="paragraph6"  class="form-control" rows="3">{{$policy->paragraph6 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 7</label>
                            <textarea name="paragraph7"  class="form-control" rows="3">{{$policy->paragraph7 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 8</label>
                            <textarea name="paragraph8"  class="form-control" rows="3">{{$policy->paragraph8 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 9</label>
                            <textarea name="paragraph9"  class="form-control" rows="3">{{$policy->paragraph9 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 10</label>
                            <textarea name="pararaph10"  class="form-control" rows="3">{{$policy->paragraph10 ?? ''}}</textarea>
                        </div>


                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Information Collected (Optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 1</label>
                            <textarea   name="paragraph11" class="form-control">{{$information->paragraph1 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <laravel>Paragraph 2</laravel>
                            <textarea   name="paragraph12" class="form-control" >{{$information->paragraph2 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 3</label>
                            <textarea   name="paragraph13" class="form-control">{{$information->paragraph3 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 4</label>
                             <textarea name="paragraph14"  class="form-control" rows="3">{{$information->paragraph4 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 5</label>
                            <textarea name="paragraph15"  class="form-control" rows="3">{{$information->paragraph5 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 6</label>
                            <textarea name="paragraph16"  class="form-control" rows="3">{{$information->paragraph6 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 7</label>
                            <textarea name="paragraph17"  class="form-control" rows="3">{{$information->paragraph7 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 8</label>
                            <textarea name="paragraph18"  class="form-control" rows="3">{{$information->paragraph8 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 9</label>
                            <textarea name="paragraph19"  class="form-control" rows="3">{{$information->paragraph9 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 10</label>
                            <textarea name="pararaph20"  class="form-control" rows="3">{{$information->paragraph10 ?? ''}}</textarea>
                        </div>

                    </div>
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Use of Information (Optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 1</label>
                            <textarea   name="paragraph21" class="form-control">{{$useOfInformation->paragraph1 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <laravel>Paragraph 2</laravel>
                            <textarea   name="paragraph22" class="form-control" >{{$useOfInformation->paragraph2 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 3</label>
                            <textarea   name="paragraph23" class="form-control">{{$useOfInformation->paragraph3 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 4</label>
                             <textarea name="paragraph24"  class="form-control" rows="3">{{$useOfInformation->paragraph4 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 5</label>
                            <textarea name="paragraph25"  class="form-control" rows="3">{{$useOfInformation->paragraph5 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 6</label>
                            <textarea name="paragraph26"  class="form-control" rows="3">{{$useOfInformation->paragraph6 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 7</label>
                            <textarea name="paragraph27"  class="form-control" rows="3">{{$useOfInformation->paragraph7 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 8</label>
                            <textarea name="paragraph28"  class="form-control" rows="3">{{$useOfInformation->paragraph8 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 9</label>
                            <textarea name="paragraph29"  class="form-control" rows="3">{{$useOfInformation->paragraph9 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 10</label>
                            <textarea name="pararaph30"  class="form-control" rows="3">{{$useOfInformation->paragraph10 ?? ''}}</textarea>
                        </div>

                    </div>
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Information Protection (Optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 1</label>
                            <textarea   name="paragraph31" class="form-control">{{$informationPolicy->paragraph1 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <laravel>Paragraph 2</laravel>
                            <textarea   name="paragraph32" class="form-control" >{{$informationPolicy->paragraph2 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 3</label>
                            <textarea   name="paragraph33" class="form-control">{{$informationPolicy->paragraph3 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 4</label>
                             <textarea name="paragraph34"  class="form-control" rows="3">{{$informationPolicy->paragraph4 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 5</label>
                            <textarea name="paragraph35"  class="form-control" rows="3">{{$informationPolicy->paragraph5 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 6</label>
                            <textarea name="paragraph36"  class="form-control" rows="3">{{$informationPolicy->paragraph6 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 7</label>
                            <textarea name="paragraph37"  class="form-control" rows="3">{{$informationPolicy->paragraph7 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 8</label>
                            <textarea name="paragraph38"  class="form-control" rows="3">{{$informationPolicy->paragraph8 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 9</label>
                            <textarea name="paragraph39"  class="form-control" rows="3">{{$informationPolicy->paragraph9 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 10</label>
                            <textarea name="pararaph40"  class="form-control" rows="3">{{$informationPolicy->paragraph10 ?? ''}}</textarea>
                        </div>

                    </div>
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Information Sharing (Optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 1</label>
                            <textarea   name="paragraph41" class="form-control">{{$informationSharing->paragraph1 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <laravel>Paragraph 2</laravel>
                            <textarea   name="paragraph42" class="form-control" >{{$informationSharing->paragraph2 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 3</label>
                            <textarea   name="paragraph43" class="form-control">{{$informationSharing->paragraph3 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 4</label>
                             <textarea name="paragraph44"  class="form-control" rows="3">{{$informationSharing->paragraph4 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 5</label>
                            <textarea name="paragraph45"  class="form-control" rows="3">{{$informationSharing->paragraph5 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 6</label>
                            <textarea name="paragraph46"  class="form-control" rows="3">{{$informationSharing->paragraph6 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 7</label>
                            <textarea name="paragraph47"  class="form-control" rows="3">{{$informationSharing->paragraph7 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 8</label>
                            <textarea name="paragraph48"  class="form-control" rows="3">{{$informationSharing->paragraph8 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 9</label>
                            <textarea name="paragraph49"  class="form-control" rows="3">{{$informationSharing->paragraph9 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 10</label>
                            <textarea name="pararaph50"  class="form-control" rows="3">{{$informationSharing->paragraph10 ?? ''}}</textarea>
                        </div>

                    </div>
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Policy for Children (Optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 1</label>
                            <textarea   name="paragraph51" class="form-control">{{$policychildren->paragraph1 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <laravel>Paragraph 2</laravel>
                            <textarea   name="paragraph52" class="form-control" >{{$policychildren->paragraph2 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 3</label>
                            <textarea   name="paragraph53" class="form-control">{{$policychildren->paragraph3 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 4</label>
                             <textarea name="paragraph54"  class="form-control" rows="3">{{$policychildren->paragraph4 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 5</label>
                            <textarea name="paragraph55"  class="form-control" rows="3">{{$policychildren->paragraph5 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 6</label>
                            <textarea name="paragraph56"  class="form-control" rows="3">{{$policychildren->paragraph6 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 7</label>
                            <textarea name="paragraph57"  class="form-control" rows="3">{{$policychildren->paragraph7 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 8</label>
                            <textarea name="paragraph58"  class="form-control" rows="3">{{$policychildren->paragraph8 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 9</label>
                            <textarea name="paragraph59"  class="form-control" rows="3">{{$policychildren->paragraph9 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 10</label>
                            <textarea name="pararaph60"  class="form-control" rows="3">{{$policychildren->paragraph10 ?? ''}}</textarea>
                        </div>

                    </div>
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Privacy Policy Updates (Optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 1</label>
                            <textarea   name="paragraph61" class="form-control">{{$policyupdate->paragraph1 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <laravel>Paragraph 2</laravel>
                            <textarea   name="paragraph62" class="form-control" >{{$policyupdate->paragraph2 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 3</label>
                            <textarea   name="paragraph63" class="form-control">{{$policyupdate->paragraph3 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 4</label>
                             <textarea name="paragraph64"  class="form-control" rows="3">{{$policyupdate->paragraph4 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 5</label>
                            <textarea name="paragraph65"  class="form-control" rows="3">{{$policyupdate->paragraph5 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 6</label>
                            <textarea name="paragraph66"  class="form-control" rows="3">{{$policyupdate->paragraph6 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 7</label>
                            <textarea name="paragraph67"  class="form-control" rows="3">{{$policyupdate->paragraph7 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 8</label>
                            <textarea name="paragraph68"  class="form-control" rows="3">{{$policyupdate->paragraph8 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 9</label>
                            <textarea name="paragraph69"  class="form-control" rows="3">{{$policyupdate->paragraph9 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 10</label>
                            <textarea name="pararaph70"  class="form-control" rows="3">{{$policyupdate->paragraph10 ?? ''}}</textarea>
                        </div>

                    </div>
                </div>


                <div class="card mb-3">
                    <div class="card-header bg-primary">
                        <h3 class="text-white mb-0">Contact (Optional)</h3>
                    </div>
    
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12 mb-3">
                                <label>Paragraph 1</label>
                                <textarea   name="paragraph71" class="form-control">{{$contactpolicy->paragraph1 ?? ''}}</textarea>
                            </div>
    
                            <div class="col-md-12 mb-3">
                                <laravel>Paragraph 2</laravel>
                                <textarea   name="paragraph72" class="form-control" >{{$contactpolicy->paragraph2 ?? ''}}</textarea>
                            </div>
    
                            <div class="col-md-12 mb-3">
                                <label>Paragraph 3</label>
                                <textarea   name="paragraph73" class="form-control">{{$contactpolicy->paragraph3 ?? ''}}</textarea>
                            </div>
    
                            <div class="col-md-12 mb-3">
                                <label>Paragraph 4</label>
                                 <textarea name="paragraph74"  class="form-control" rows="3">{{$contactpolicy->paragraph4 ?? ''}}</textarea>
                            </div>
    
                            <div class="col-md-12 mb-3">
                                <label>Paragraph 5</label>
                                <textarea name="paragraph75"  class="form-control" rows="3">{{$contactpolicy->paragraph5 ?? ''}}</textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Paragraph 6</label>
                                <textarea name="paragraph76"  class="form-control" rows="3">{{$contactpolicy->paragraph6 ?? ''}}</textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Paragraph 7</label>
                                <textarea name="paragraph77"  class="form-control" rows="3">{{$contactpolicy->paragraph7 ?? ''}}</textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Paragraph 8</label>
                                <textarea name="paragraph78"  class="form-control" rows="3">{{$contactpolicy->paragraph8 ?? ''}}</textarea>
                            </div>


                            <div class="col-md-12 mb-3">
                                <label>Paragraph 9</label>
                                <textarea name="paragraph79"  class="form-control" rows="3">{{$contactpolicy->paragraph9 ?? ''}}</textarea>
                            </div>


                            <div class="col-md-12 mb-3">
                                <label>Paragraph 10</label>
                                <textarea name="pararaph80"  class="form-control" rows="3">{{$contactpolicy->paragraph10 ?? ''}}</textarea>
                            </div>
    
                        </div>
                    </div>
            </div>


            

            <div class="text-end">
                <button type="submit" class="btn btn-primary text-white">Save Informations</button>
            </div>
            
        </form>
    </div>
</div>



@endsection