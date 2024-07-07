@extends('extenders.layout')

@section('title','Update Specification')

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

        @if(session()->has('success'))
                          
        <div class="alert alert-success alert-dismissible fade show">
          {{session('success')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>


        @endif

        <div class="row">
            <div class="col-md-12 mb-5">
                <h2 class="text-center">Update product specification</h2>
            </div>
        </div>


        <form action="{{route('update.specification',$product->id)}}" method="post">
            @csrf

            @method('PUT')

            <div class="card-mb-3">
                <div class="card-header bg-success">
                    <h3 class="text-white mb-0">General Characteristics </h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        <input type="hidden" value="{{$product->id}}" name="product_id">
                        <div class="col-md-6 mb-3">
                            <label>Device Type </label>
                            <input type="text" value="{{$product->specificationGeneral->device_type}}" name="device_type" class="form-control"/>
                        </div>

                        <div class="col-md-6 mb-3">
                            <laravel>Destined for </laravel>
                            <input type="text" value="{{$product->specificationGeneral->destined_for}}" name="destined_for" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Operating System </label>
                            <input type="text" value="{{$product->specificationGeneral->operating_system}}" name="operating_system" class="form-control"/>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Operating System Version </label>
                            <input type="text" value="{{$product->specificationGeneral->operation_system_version}}" name="operating_system_version" class="form-control"/>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Package contents </label>
                             <input type="text" name="package_contents" value="{{$product->specificationGeneral->package_contents}}" class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Length </label>
                            <input type="text" name="length" value="{{$product->specificationGeneral->lenght}}"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Height </label>
                            <input type="text" name="height" value="{{$product->specificationGeneral->height}}"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Dimension </label>
                            <input type="text" name="dimension" value="{{$product->specificationGeneral->dimension}}"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Weight </label>
                            <input type="text" name="weight" value="{{$product->specificationGeneral->weight}}" class="form-control" rows="3">
                        </div>



                        <div class="col-md-6 mb-3">
                            <label>Color </label>
                            <input type="text" name="color" value="{{$product->specificationGeneral->color}}"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Model </label>
                            <input type="text" value="{{$product->specificationGeneral->model}}" name="model"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Line-up </label>
                            <input type="text" value="{{$product->specificationGeneral->lineup}}"  name="line-up"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Connectivity </label>
                            <input type="text" value="{{$product->specificationGeneral->conectivity}}" name="connectivity"  class="form-control" rows="3">
                        </div>



                        <div class="col-md-6 mb-3">
                            <label>Tehnology </label>
                            <input type="text" value="{{$product->specificationGeneral->tehnology}}" name="tehnology"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>SIM slots </label>
                            <input type="text" value="{{$product->specificationGeneral->SIM_slots}}" name="sim_slots"  class="form-control" rows="3">
                        </div> 


                        <div class="col-md-6 mb-3">
                            <label>SIM type </label>
                            <input type="text" value="{{$product->specificationGeneral->SIM_type}}" name="sim_type"  class="form-control" rows="3">
                        </div>

                        

                        <div class="col-md-6 mb-3">
                            <label>Bluetooth Version </label>
                            <input type="text" value="{{$product->specificationGeneral->bluetooth_version}}" name="bluetooth_version"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label>Senzors </label>
                            <input type="text" value="{{$product->specificationGeneral->senzors}}" name="senzors"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-12 mb-3 ">
                            <label>Year of Appearance </label>
                            <input type="text" value="{{$product->specificationGeneral->relased_yaer}}" name="year_of_appearance"  class="form-control" rows="3">
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-success">
                    <h3 class="text-white mb-0">DISPLAY </h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Display Type </label>
                            <input type="text" value="{{$product->specificationDisplay->display_type}}" name="display_type"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Display Format </label>
                            <input type="text" value="{{$product->specificationDisplay->format_display}}" name="display_format"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Display Tehnology </label>
                            <input type="text" value="{{$product->specificationDisplay->tehnology_display}}" name="display_tehnology"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Diagonal Display </label>
                            <input type="text" value="{{$product->specificationDisplay->diagonal_display}}" name="diagonal_display"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Refresh Rate </label>
                            <input type="text" value="{{$product->specificationDisplay->refresh_rate}}"  name="refresh_rate"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Luminosity </label>
                            <input type="text" value="{{$product->specificationDisplay->luminozity}}" name="luminosity"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Display Finish </label>
                            <input type="text" value="{{$product->specificationDisplay->display_finish}}" name="display_finish"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Touchscreen </label>
                            <input type="checkbox" {{$product->specificationDisplay->touchscreen == '1' ? 'checked':''}} name="touchscreen"   rows="3"> Checked=Yes
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Rezolution </label>
                            <input type="text" value="{{$product->specificationDisplay->rezolution}}" name="resolution"  class="form-control" rows="3">
                        </div>

                        


                        <div class="col-md-6 mb-3">
                            <label>Display Functions </label>
                            <input type="text" value="{{$product->specificationDisplay->display_functions}}" name="display_functions"  class="form-control" rows="3">
                        </div>

                    </div>
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header bg-success">
                    <h3 class="text-white mb-0">Processor </h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Processor Manufacturer </label>
                            <input type="text" value="{{$product->specificationProcessor->processor_manufactures}}" name="processor_manufacturer"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Processor Type </label>
                            <input type="text" value="{{$product->specificationProcessor->processor_type}}" name="processor_type"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Processor Model </label>
                            <input type="text" value="{{$product->specificationProcessor->processor_model}}" name="processor_model"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Processor Stocket </label>
                            <input type="text" value="{{$product->specificationProcessor->processor_stocket}}" name="processor_stocket"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Number of Cores </label>
                            <input type="text" value="{{$product->specificationProcessor->number_of_cores}}" name="number_of_cores"  class="form-control" rows="3">
                        </div>

                        

                        <div class="col-md-6 mb-3">
                            <label>Chache </label>
                            <input type="text" value="{{$product->specificationProcessor->cache}}" name="chache"  class="form-control" rows="3">
                        </div>

                        


                        <div class="col-md-6 mb-3">
                            <label>Processor Tehnology </label>
                            <input type="text" value="{{$product->specificationProcessor->processor_tehnology}}" name="processor_tehnology"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Processor Frequency </label>
                            <input type="text" value="{{$product->specificationProcessor->processor_frequency}}" name="processor_frequency"  class="form-control" rows="3">
                        </div>

                        



                        <div class="col-md-12 mb-3">
                            <label>Integrated Graphics Processor </label>
                            <input type="text" value="{{$product->specificationProcessor->integrated_graphics_processor}}" name="integrated_graphics_processor"  class="form-control" rows="3">
                        </div>



                    </div>
                </div>
            </div>




            <div class="card mb-3">
                <div class="card-header bg-success">
                    <h3 class="text-white mb-0">VIDEO CARD </h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Video Card Type </label>
                            <input type="text" value="{{$product->specificationVideoCard->videocard_type}}" name="video_card_type"  class="form-control" rows="3">
                        </div>

                        

                        <div class="col-md-6 mb-3">
                            <label>Video Card Manufacturer </label>
                            <input type="text" value="{{$product->specificationVideoCard->videocard_manufacturer}}" name="video_card_manufacturer"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Video Card Model </label>
                            <input type="text" value="{{$product->specificationVideoCard->video_card_model}}" name="video_card_model"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Video Memory Capacity </label>
                            <input type="text" value="{{$product->specificationVideoCard->video_memory_capacity}}" name="video_memory_capacity"  class="form-control" rows="3">
                        </div>


                        

                        <div class="col-md-6 mb-3">
                            <label>Videocard Memory Capacity </label>
                            <input type="text" value="{{$product->specificationVideoCard->videocard_memory_capacity}}"  name="videocard_memory_capacity"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Video Card Memory Type </label>
                            <input type="text" value="{{$product->specificationVideoCard->videocard_memory_type}}" name="video_card_memory_type"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Video Card Tehnologies </label>
                            <input type="text" value="{{$product->specificationVideoCard->videocard_tehnologi}}" name="video_card_technologies"  class="form-control" rows="3">
                        </div>

                        


                        

                        <div class="col-md-6 mb-3">
                            <label>Video Card Ports </label>
                            <input type="text" value="{{$product->specificationVideoCard->videocard_ports}}" name="video_card_ports"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Video Chipset </label>
                            <input type="text" value="{{$product->specificationVideoCard->chipset_video}}"  name="video_chipset"  class="form-control" rows="3">
                        </div>


                    </div>
                </div>
            </div>





            <div class="card mb-3">
                <div class="card-header bg-success">
                    <h3 class="text-white mb-0">MOTHERBOARD </h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        


                        <div class="col-md-6 mb-3">
                            <label>Motherboard Manufacturer </label>
                            <input type="text" value="{{$product->specificationMotherboard->motherboard_manufacturer}}" name="motherboard_manufacturer"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Processor Stocket </label>
                            <input type="text" value="{{$product->specificationMotherboard->socket_processor}}" name="processor_stocket"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Chipset </label>
                            <input type="text" value="{{$product->specificationMotherboard->chipset}}" name="chipset"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Onboard Slots </label>
                            <input type="text" value="{{$product->specificationMotherboard->onboard_slots}}" name="onboard_slots"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Back Panel Ports </label>
                            <input type="text" value="{{$product->specificationMotherboard->back_panel_ports}}" name="back_panel_ports"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Total Number of Memory Slots </label>
                            <input type="text" value="{{$product->specificationMotherboard->total_number_of_memory_slots}}" name="total_number_of_memory_slots"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Network </label>
                            <input type="text" value="{{$product->specificationMotherboard->networck}}" name="network"  class="form-control" rows="3">
                        </div>

                        


                        

                        



                    </div>
                </div>
            </div>



            


            <div class="card mb-3">
                <div class="card-header bg-success">
                    <h3 class="text-white mb-0">Memory </h3>
                </div>

                <div class="card-body">
                    <div class="row">


                        

                        <div class="col-md-6 mb-3">
                            <label>Memory Manufacturer </label>
                            <input type="text" value="{{$product->specificationMemory->memory_manufacturer}}" name="memory_manufacturer"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Memory Type </label>
                            <input type="text" value="{{$product->specificationMemory->memory_type}}"  name="memory_type"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Memory Capacity </label>
                            <input type="text" value="{{$product->specificationMemory->memory_capacity}}" name="memory_capacity"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Memory Frequency </label>
                            <input type="text" value="{{$product->specificationMemory->memory_frequez}}" name="memory_frequency"  class="form-control" rows="3">
                        </div>

                       

                    

                        

                        



                    </div>
                </div>
            </div> 


            <div class="card mb-3">
                <div class="card-header bg-success">
                    <h3 class="text-white mb-0">HARD DISK </h3>
                </div>

                <div class="card-body">
                    <div class="row">



                        <div class="col-md-6 mb-3">
                            <label>Producer & SSD Model </label>
                            <input type="text" value="{{$product->specificationStorage->producerSSDmodel}}" name="producer_&_SSD_model"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Storage Type </label>
                            <input type="text" value="{{$product->specificationStorage->storage_type}}" name="storage_type"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>SSD Capacity </label>
                            <input type="text" value="{{$product->specificationStorage->SSD_capacity}}" name="ssd_capacity"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>SSD Interface </label>
                            <input type="text" value="{{$product->specificationStorage->SSD_interface}}"  name="ssd_interface"  class="form-control" rows="3">
                        </div>

                        

                        



                       



                    </div>
                </div>
            </div> 


            <div class="card mb-3">
                <div class="card-header bg-success">
                    <h3 class="text-white mb-0">FOTO & VIDEO </h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Number of Cameras </label>
                            <input type="text" value="{{$product->specificationPhotoVideo->number_camera}}" name="number_of_cameras"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Main Camera Resolution </label>
                            <input type="text" value="{{$product->specificationPhotoVideo->principal_camera_resolution}}" name="main_camer_resolution"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Frontal Camera Resolution </label>
                            <input type="text" value="{{$product->specificationPhotoVideo->frontal_camera_resolution}}" name="frontal_camera_resolution"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Video Rezolution </label>
                            <input type="text" value="{{$product->specificationPhotoVideo->video_rezolution}}" name="rezolution_video"  class="form-control" rows="3">
                        </div> 

                        
                        <div class="col-md-6 mb-3">
                            <label>Photo/video Features </label>
                            <input type="text" value="{{$product->specificationPhotoVideo->fotvideo_features}}" name="photo/video_feature"  class="form-control" rows="3">
                        </div>



                        <div class="col-md-6 mb-3">
                            <label>Blit </label>
                            <input type="checkbox" name="blit" {{$product->specificationPhotoVideo->blit == '1' ? 'checked':''}}   rows="3"> Checked = Yes
                        </div>
                        



                    </div>
                </div>
            </div> 


            <div class="card mb-3">
                <div class="card-header bg-success">
                    <h3 class="text-white mb-0">Multymedia </h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Optical Drive </label>
                            <input type="text" value="{{$product->specificationMultyMedia->optical_drive}}" name="optical_drive"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Web Camera </label>
                            <input type="text"  name="web_camera" value="{{$product->specificationMultyMedia->web_camera}}"  class="form-control" rows="3">
                        </div>

                        

                        

                        <div class="col-md-6 mb-3">
                            <label>Audio </label>
                            <input type="text" value="{{$product->specificationMultyMedia->audio}}" name="audio"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Audio Tehnology </label>
                            <input type="text" value="{{$product->specificationMultyMedia->audio_tehnologii}}" name="audio_tehnologii"  class="form-control" rows="3">
                        </div>



                        <div class="col-md-12 mb-3">
                            <label>Loudspeaker Manufacturer </label>
                            <input type="text" value="{{$product->specificationMultyMedia->loudspeaker_manufacturer}}" name="loudspeaker_manufacturer"  class="form-control" rows="3">
                        </div>


                    </div>
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header bg-success">
                    <h3 class="text-white mb-0">Case </h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Case Type </label>
                            <input type="text" value="{{$product->specificationCase->case_type}}" name="case_type"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Source Power </label>
                            <input type="text" value="{{$product->specificationCase->source_power}}" name="source_power"  class="form-control" rows="3">
                        </div>


                    
                        

                        


                        <div class="col-md-6 mb-3">
                            <label>Motherboard Format Compatibility </label>
                            <input type="text" value="{{$product->specificationCase->motherboard_format_compatibility}}" name="motherboard_format_compatibility"  class="form-control" rows="3">
                        </div>

                        


                        <div class="col-md-6 mb-3">
                            <label>Processor Cooling System </label>
                            <input type="text" value="{{$product->specificationCase->processor_cooling_system}}" name="processor_cooling_system"  class="form-control" rows="3">
                        </div>



                    </div>
                </div>
            </div>

            <div class="col-md-10 mx-auto">
                <button type="submit" class="btn btn-success form-control text-white ">Update Specification</button>
            </div>
            
        </form>
    </div>
</div>


@endsection