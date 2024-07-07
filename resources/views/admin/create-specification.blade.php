@extends('extenders.layout')

@section('title','Add Specification')

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
                <h2 class="text-center">Add product specification</h2>
            </div>
        </div>


        <form action="{{route('create.specification')}}" method="post">
            @csrf

            <div class="card-mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">General Characteristics (optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        <input type="hidden" value="{{$product->id}}" name="product_id">
                        <div class="col-md-6 mb-3">
                            <label>Device Type (optional)</label>
                            <input type="text" value="" name="device_type" class="form-control"/>
                        </div>

                        <div class="col-md-6 mb-3">
                            <laravel>Destined for (optional)</laravel>
                            <input type="text" value="" name="destined_for" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Operating System (optional)</label>
                            <input type="text" value="" name="operating_system" class="form-control"/>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Operating System Version (optional)</label>
                            <input type="text" value="" name="operating_system_version" class="form-control"/>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Package contents (optional)</label>
                             <input type="text" name="package_contents" value="" class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Length (optional)</label>
                            <input type="text" name="length"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Height (optional)</label>
                            <input type="text" name="height"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Dimension (optional)</label>
                            <input type="text" name="dimension"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Weight (optional)</label>
                            <input type="text" name="weight"  class="form-control" rows="3">
                        </div>



                        <div class="col-md-6 mb-3">
                            <label>Color (optional)</label>
                            <input type="text" name="color"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Model (optional)</label>
                            <input type="text" name="model"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Line-up (optional)</label>
                            <input type="text" name="line-up"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Connectivity (optional)</label>
                            <input type="text" name="connectivity"  class="form-control" rows="3">
                        </div>



                        <div class="col-md-6 mb-3">
                            <label>Tehnology (optional)</label>
                            <input type="text" name="tehnology"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>SIM slots (optional)</label>
                            <input type="text" name="sim_slots"  class="form-control" rows="3">
                        </div> 


                        <div class="col-md-6 mb-3">
                            <label>SIM type (optional)</label>
                            <input type="text" name="sim_type"  class="form-control" rows="3">
                        </div>

                        

                        <div class="col-md-6 mb-3">
                            <label>Bluetooth Version (optional)</label>
                            <input type="text" name="bluetooth_version"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label>Senzors (optional)</label>
                            <input type="text" name="senzors"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-12 mb-3 ">
                            <label>Year of Appearance (optional)</label>
                            <input type="text" name="year_of_appearance"  class="form-control" rows="3">
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">DISPLAY (optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Display Type (optional)</label>
                            <input type="text" name="display_type"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Display Format (optional)</label>
                            <input type="text" name="display_format"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Display Tehnology (optional)</label>
                            <input type="text" name="display_tehnology"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Diagonal Display (optional)</label>
                            <input type="text" name="diagonal_display"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Refresh Rate (optional)</label>
                            <input type="text" name="refresh_rate"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Luminosity (optional)</label>
                            <input type="text" name="luminosity"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Display Finish (optional)</label>
                            <input type="text" name="display_finish"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Touchscreen (optional)</label>
                            <input type="checkbox" name="touchscreen"   rows="3"> Checked=Yes
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Rezolution (optional)</label>
                            <input type="text" name="resolution"  class="form-control" rows="3">
                        </div>

                        


                        <div class="col-md-6 mb-3">
                            <label>Display Functions (optional)</label>
                            <input type="text" name="display_functions"  class="form-control" rows="3">
                        </div>

                    </div>
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Processor (optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Processor Manufacturer (optional)</label>
                            <input type="text" name="processor_manufacturer"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Processor Type (optional)</label>
                            <input type="text" name="processor_type"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Processor Model (optional)</label>
                            <input type="text" name="processor_model"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Processor Stocket (optional)</label>
                            <input type="text" name="processor_stocket"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Number of Cores (optional)</label>
                            <input type="text" name="number_of_cores"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Refresh Rate (optional)</label>
                            <input type="text" name="refresh_rate"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Chache (optional)</label>
                            <input type="text" name="chache"  class="form-control" rows="3">
                        </div>

                        


                        <div class="col-md-6 mb-3">
                            <label>Processor Tehnology (optional)</label>
                            <input type="text" name="processor_tehnology"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Processor Frequency (optional)</label>
                            <input type="text" name="processor_frequency"  class="form-control" rows="3">
                        </div>

                        



                        <div class="col-md-6 mb-3">
                            <label>Integrated Graphics Processor (optional)</label>
                            <input type="text" name="integrated_graphics_processor"  class="form-control" rows="3">
                        </div>



                    </div>
                </div>
            </div>




            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">VIDEO CARD (optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Video Card Type (optional)</label>
                            <input type="text" name="video_card_type"  class="form-control" rows="3">
                        </div>

                        

                        <div class="col-md-6 mb-3">
                            <label>Video Card Manufacturer (optional)</label>
                            <input type="text" name="video_card_manufacturer"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Video Card Model (optional)</label>
                            <input type="text" name="video_card_model"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Video Memory Capacity (optional)</label>
                            <input type="text" name="video_memory_capacity"  class="form-control" rows="3">
                        </div>


                        

                        <div class="col-md-6 mb-3">
                            <label>Videocard Memory Capacity (optional)</label>
                            <input type="text" name="videocard_memory_capacity"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Video Card Memory Type (optional)</label>
                            <input type="text" name="video_card_memory_type"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Video Card Tehnologies (optional)</label>
                            <input type="text" name="video_card_technologies"  class="form-control" rows="3">
                        </div>

                        


                        

                        <div class="col-md-6 mb-3">
                            <label>Video Card Ports (optional)</label>
                            <input type="text" name="video_card_ports"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Video Chipset (optional)</label>
                            <input type="text" name="video_chipset"  class="form-control" rows="3">
                        </div>


                    </div>
                </div>
            </div>





            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">MOTHERBOARD (optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        


                        <div class="col-md-6 mb-3">
                            <label>Motherboard Manufacturer (optional)</label>
                            <input type="text" name="motherboard_manufacturer"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Processor Stocket (optional)</label>
                            <input type="text" name="processor_stocket"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Chipset (optional)</label>
                            <input type="text" name="chipset"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Onboard Slots (optional)</label>
                            <input type="text" name="onboard_slots"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Back Panel Ports (optional)</label>
                            <input type="text" name="back_panel_ports"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Total Number of Memory Slots (optional)</label>
                            <input type="text" name="total_number_of_memory_slots"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Network (optional)</label>
                            <input type="text" name="network"  class="form-control" rows="3">
                        </div>

                        


                        <div class="col-md-6 mb-3">
                            <label>Total Mumber Of Memory Slots (optional)</label>
                            <input type="text" name="total_number_of_memory_slots"  class="form-control" rows="3">
                        </div>

                        



                    </div>
                </div>
            </div>



            


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Memory (optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">


                        

                        <div class="col-md-6 mb-3">
                            <label>Memory Manufacturer (optional)</label>
                            <input type="text" name="memory_manufacturer"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Memory Type (optional)</label>
                            <input type="text" name="memory_type"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Memory Capacity (optional)</label>
                            <input type="text" name="memory_capacity"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Memory Frequency (optional)</label>
                            <input type="text" name="memory_frequency"  class="form-control" rows="3">
                        </div>

                       

                    

                        

                        



                    </div>
                </div>
            </div> 


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">HARD DISK (optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">



                        <div class="col-md-6 mb-3">
                            <label>Producer & SSD Model (optional)</label>
                            <input type="text" name="producer_&_SSD_model"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Storage Type (optional)</label>
                            <input type="text" name="storage_type"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>SSD Capacity (optional)</label>
                            <input type="text" name="ssd_capacity"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>SSD Interface (optional)</label>
                            <input type="text" name="ssd_interface"  class="form-control" rows="3">
                        </div>

                        

                        



                       



                    </div>
                </div>
            </div> 


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">FOTO & VIDEO (optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Number of Cameras (optional)</label>
                            <input type="text" name="number_of_cameras"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Main Camera Resolution (optional)</label>
                            <input type="text" name="main_camer_resolution"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Frontal Camera Resolution (optional)</label>
                            <input type="text" name="frontal_camera_resolution"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Video Rezolution (optional)</label>
                            <input type="text" name="rezolution_video"  class="form-control" rows="3">
                        </div> 

                        
                        <div class="col-md-6 mb-3">
                            <label>Photo/video Features (optional)</label>
                            <input type="text" name="photo/video_feature"  class="form-control" rows="3">
                        </div>



                        <div class="col-md-6 mb-3">
                            <label>Blit (optional)</label>
                            <input type="checkbox" name="blit"   rows="3"> Checked = Yes
                        </div>
                        



                    </div>
                </div>
            </div> 


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Multymedia (optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Optical Drive (optional)</label>
                            <input type="text" name="optical_drive"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Web Camera (optional)</label>
                            <input type="text" name="web_camera"  class="form-control" rows="3">
                        </div>

                        

                        

                        <div class="col-md-6 mb-3">
                            <label>Audio (optional)</label>
                            <input type="text" name="audio"  class="form-control" rows="3">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Audio Tehnology (optional)</label>
                            <input type="text" name="audio_tehnologii"  class="form-control" rows="3">
                        </div>



                        <div class="col-md-12 mb-3">
                            <label>Loudspeaker Manufacturer (optional)</label>
                            <input type="text" name="loudspeaker_manufacturer"  class="form-control" rows="3">
                        </div>


                    </div>
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Case (optional)</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Case Type (optional)</label>
                            <input type="text" name="case_type"  class="form-control" rows="3">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Source Power (optional)</label>
                            <input type="text" name="source_power"  class="form-control" rows="3">
                        </div>


                    
                        

                        


                        <div class="col-md-6 mb-3">
                            <label>Motherboard Format Compatibility (optional)</label>
                            <input type="text" name="motherboard_format_compatibility"  class="form-control" rows="3">
                        </div>

                        


                        <div class="col-md-6 mb-3">
                            <label>Processor Cooling System (optional)</label>
                            <input type="text" name="processor_cooling_system"  class="form-control" rows="3">
                        </div>



                    </div>
                </div>
            </div>

            <div class="col-md-10 mx-auto">
                <button type="submit" class="btn btn-primary form-control text-white ">Create Specification</button>
            </div>
            
        </form>
    </div>
</div>


@endsection