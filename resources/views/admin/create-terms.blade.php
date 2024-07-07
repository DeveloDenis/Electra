@extends('extenders.layout')

@section('title','Terms & Conditions informations')

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

       
        <form action="{{route('terms-post')}}" method="post">
           @csrf
            <div class="row mb-5">
                <div class="col-md-4 "  >
                    <h3 >Terms & Conditions Informations </h3>
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
                    <h3 class="text-white mb-0">Use of the Site (Optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label>Paragraph 1</label>
                            <textarea   name="paragraph1" class="form-control">{{$useTheSiteTerms->paragraph1 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <laravel>Paragraph 2</laravel>
                            <textarea   name="paragraph2" class="form-control" >{{$useTheSiteTerms->paragraph2 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 3</label>
                            <textarea   name="paragraph3" class="form-control">{{$useTheSiteTerms->paragraph3 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 4</label>
                             <textarea name="paragraph4"  class="form-control" rows="3">{{$useTheSiteTerms->paragraph4 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 5</label>
                            <textarea name="paragraph5"  class="form-control" rows="3">{{$useTheSiteTerms->paragraph5 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 6</label>
                            <textarea name="paragraph6"  class="form-control" rows="3">{{$useTheSiteTerms->paragraph6 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 7</label>
                            <textarea name="paragraph7"  class="form-control" rows="3">{{$useTheSiteTerms->paragraph7 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 8</label>
                            <textarea name="paragraph8"  class="form-control" rows="3">{{$useTheSiteTerms->paragraph8 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 9</label>
                            <textarea name="paragraph9"  class="form-control" rows="3">{{$useTheSiteTerms->paragraph9 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 10</label>
                            <textarea name="pararaph10"  class="form-control" rows="3">{{$useTheSiteTerms->paragraph10 ?? ''}}</textarea>
                        </div>


                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Personal Information and Privacy (Optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 1</label>
                            <textarea   name="paragraph11" class="form-control">{{$PersonalInformationandPrivacy->paragraph1 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <laravel>Paragraph 2</laravel>
                            <textarea   name="paragraph12" class="form-control" >{{$PersonalInformationandPrivacy->paragraph2 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 3</label>
                            <textarea   name="paragraph13" class="form-control">{{$PersonalInformationandPrivacy->paragraph3 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 4</label>
                             <textarea name="paragraph14"  class="form-control" rows="3">{{$PersonalInformationandPrivacy->paragraph4 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 5</label>
                            <textarea name="paragraph15"  class="form-control" rows="3">{{$PersonalInformationandPrivacy->paragraph5 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 6</label>
                            <textarea name="paragraph16"  class="form-control" rows="3">{{$PersonalInformationandPrivacy->paragraph6 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 7</label>
                            <textarea name="paragraph17"  class="form-control" rows="3">{{$PersonalInformationandPrivacy->paragraph7 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 8</label>
                            <textarea name="paragraph18"  class="form-control" rows="3">{{$PersonalInformationandPrivacy->paragraph8 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 9</label>
                            <textarea name="paragraph19"  class="form-control" rows="3">{{$PersonalInformationandPrivacy->paragraph9 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 10</label>
                            <textarea name="pararaph20"  class="form-control" rows="3">{{$PersonalInformationandPrivacy->paragraph10 ?? ''}}</textarea>
                        </div>

                    </div>
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Orders and Payments (Optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 1</label>
                            <textarea   name="paragraph21" class="form-control">{{$ordersabdPaymentsTerms->paragraph1 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <laravel>Paragraph 2</laravel>
                            <textarea   name="paragraph22" class="form-control" >{{$ordersabdPaymentsTerms->paragraph2 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 3</label>
                            <textarea   name="paragraph23" class="form-control">{{$ordersabdPaymentsTerms->paragraph3 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 4</label>
                             <textarea name="paragraph24"  class="form-control" rows="3">{{$ordersabdPaymentsTerms->paragraph4 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 5</label>
                            <textarea name="paragraph25"  class="form-control" rows="3">{{$ordersabdPaymentsTerms->paragraph5 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 6</label>
                            <textarea name="paragraph26"  class="form-control" rows="3">{{$ordersabdPaymentsTerms->paragraph6 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 7</label>
                            <textarea name="paragraph27"  class="form-control" rows="3">{{$ordersabdPaymentsTerms->paragraph7 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 8</label>
                            <textarea name="paragraph28"  class="form-control" rows="3">{{$ordersabdPaymentsTerms->paragraph8 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 9</label>
                            <textarea name="paragraph29"  class="form-control" rows="3">{{$ordersabdPaymentsTerms->paragraph9 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 10</label>
                            <textarea name="pararaph30"  class="form-control" rows="3">{{$ordersabdPaymentsTerms->paragraph10 ?? ''}}</textarea>
                        </div>

                    </div>
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Delivery and Returns (Optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 1</label>
                            <textarea   name="paragraph31" class="form-control">{{$deliveryReturns->paragraph1 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <laravel>Paragraph 2</laravel>
                            <textarea   name="paragraph32" class="form-control" >{{$deliveryReturns->paragraph2 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 3</label>
                            <textarea   name="paragraph33" class="form-control">{{$deliveryReturns->paragraph3 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 4</label>
                             <textarea name="paragraph34"  class="form-control" rows="3">{{$deliveryReturns->paragraph4 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 5</label>
                            <textarea name="paragraph35"  class="form-control" rows="3">{{$deliveryReturns->paragraph5 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 6</label>
                            <textarea name="paragraph36"  class="form-control" rows="3">{{$deliveryReturns->paragraph6 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 7</label>
                            <textarea name="paragraph37"  class="form-control" rows="3">{{$deliveryReturns->paragraph7 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 8</label>
                            <textarea name="paragraph38"  class="form-control" rows="3">{{$deliveryReturns->paragraph8 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 9</label>
                            <textarea name="paragraph39"  class="form-control" rows="3">{{$deliveryReturns->paragraph9 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 10</label>
                            <textarea name="pararaph40"  class="form-control" rows="3">{{$deliveryReturns->paragraph10 ?? ''}}</textarea>
                        </div>

                    </div>
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Copyright and Intellectual Property (Optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 1</label>
                            <textarea   name="paragraph41" class="form-control">{{$copyright->paragraph1 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <laravel>Paragraph 2</laravel>
                            <textarea   name="paragraph42" class="form-control" >{{$copyright->paragraph2 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 3</label>
                            <textarea   name="paragraph43" class="form-control">{{$copyright->paragraph3 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 4</label>
                             <textarea name="paragraph44"  class="form-control" rows="3">{{$copyright->paragraph4 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 5</label>
                            <textarea name="paragraph45"  class="form-control" rows="3">{{$copyright->paragraph5 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 6</label>
                            <textarea name="paragraph46"  class="form-control" rows="3">{{$copyright->paragraph6 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 7</label>
                            <textarea name="paragraph47"  class="form-control" rows="3">{{$copyright->paragraph7 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 8</label>
                            <textarea name="paragraph48"  class="form-control" rows="3">{{$copyright->paragraph8 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 9</label>
                            <textarea name="paragraph49"  class="form-control" rows="3">{{$copyright->paragraph9 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 10</label>
                            <textarea name="pararaph50"  class="form-control" rows="3">{{$copyright->paragraph10 ?? ''}}</textarea>
                        </div>

                    </div>
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Limitation of Liability (Optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 1</label>
                            <textarea   name="paragraph51" class="form-control">{{$limit->paragraph1 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <laravel>Paragraph 2</laravel>
                            <textarea   name="paragraph52" class="form-control" >{{$limit->paragraph2 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 3</label>
                            <textarea   name="paragraph53" class="form-control">{{$limit->paragraph3 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 4</label>
                             <textarea name="paragraph54"  class="form-control" rows="3">{{$limit->paragraph4 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 5</label>
                            <textarea name="paragraph55"  class="form-control" rows="3">{{$limit->paragraph5 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 6</label>
                            <textarea name="paragraph56"  class="form-control" rows="3">{{$limit->paragraph6 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 7</label>
                            <textarea name="paragraph57"  class="form-control" rows="3">{{$limit->paragraph7 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 8</label>
                            <textarea name="paragraph58"  class="form-control" rows="3">{{$limit->paragraph8 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 9</label>
                            <textarea name="paragraph59"  class="form-control" rows="3">{{$limit->paragraph9 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 10</label>
                            <textarea name="pararaph60"  class="form-control" rows="3">{{$limit->paragraph10 ?? ''}}</textarea>
                        </div>

                    </div>
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Changes to Terms and Conditions (Optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 1</label>
                            <textarea   name="paragraph61" class="form-control">{{$changes->paragraph1 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <laravel>Paragraph 2</laravel>
                            <textarea   name="paragraph62" class="form-control" >{{$changes->paragraph2 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 3</label>
                            <textarea   name="paragraph63" class="form-control">{{$changes->paragraph3 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 4</label>
                             <textarea name="paragraph64"  class="form-control" rows="3">{{$changes->paragraph4 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 5</label>
                            <textarea name="paragraph65"  class="form-control" rows="3">{{$changes->paragraph5 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 6</label>
                            <textarea name="paragraph66"  class="form-control" rows="3">{{$changes->paragraph6 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 7</label>
                            <textarea name="paragraph67"  class="form-control" rows="3">{{$changes->paragraph7 ?? ''}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Paragraph 8</label>
                            <textarea name="paragraph68"  class="form-control" rows="3">{{$changes->paragraph8 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 9</label>
                            <textarea name="paragraph69"  class="form-control" rows="3">{{$changes->paragraph9 ?? ''}}</textarea>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Paragraph 10</label>
                            <textarea name="pararaph70"  class="form-control" rows="3">{{$changes->paragraph10 ?? ''}}</textarea>
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