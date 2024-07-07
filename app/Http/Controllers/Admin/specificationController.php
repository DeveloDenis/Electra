<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SpecificationCase;
use App\Models\SpecificationGeneral;
use App\Models\SpecificationMemory;
use App\Models\SpecificationMotherBoard;
use App\Models\SpecificationMultymedia;
use App\Models\SpecificationPhotoVideo;
use App\Models\SpecificationProcessor;
use App\Models\SpecificationsDisplay;
use App\Models\SpecificationStorage;
use App\Models\SpecificationVideoCard;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class specificationController extends Controller
{
    
    public function specification($productId){


        if(!Gate::allows('admin')){
            abort(403);
        }


        $product = Product::where('id',$productId)->firstOrFail();

        $TaskCount = Task::all()->count();

        if($product){


             return view('admin.create-specification',compact('product','TaskCount'));
        }else{

            return redirect()->back()->with('error','Product was not found');
        }

    }



    public function createSpecification(Request $request){


        if(!Gate::allows('admin')){
            abort(403);
        }


        SpecificationGeneral::create([
            'device_type'=>$request->get('device_type'),
            'model'=>$request->get('model'),
            'tehnology'=>$request->get('tehnology'),
            'destined_for'=>$request->get('destined_for'),
            'conectivity'=>$request->get('connectivity'),
            'package_contents'=>$request->get('package_contents'),
            'operating_system'=>$request->get('operating_system'),
            'operation_system_version'=>$request->get('operating_system_version'),
            'line-up'=>$request->get('line-up'),
            'weight'=>$request->get('weight'),
            'height'=>$request->get('height'),
            'lenght'=>$request->get('length'),
            'dimension'=>$request->get('dimension'),
            'color'=>$request->get('color'),
            'SIM_slots'=>$request->get('sim_slots'),
            'SIM_type'=>$request->get('sim_type'),
            'bluetooth_version'=>$request->get('bluetooth_version'),
            'senzors'=>$request->get('senzors'),
            'relased_yaer'=>$request->get('year_of_appearance'),
            'product_id'=>$request->get('product_id'),
        ]);

        SpecificationsDisplay::create([
        'diagonal_display'=>$request->get('diagonal_display'),
        'format_display'=>$request->get('display_format'),
        'display_type'=>$request->get('display_type'),
        'tehnology_display'=>$request->get('display_tehnology'),
        'refresh_rate'=>$request->get('refresh_rate'),
        'luminozity'=>$request->get('luminosity'),
        'touchscreen'=>$request->get('touchscreen') == true ? '1':'0',
        'rezolution'=>$request->get('resolution'),
        'display_finish'=>$request->get('display_finish'),
        'display_functions'=>$request->get('display_functions'),
        'product_id'=>$request->get('product_id'),
        ]);



        SpecificationProcessor::create([
            'processor_type'=>$request->get('processor_type'),
            'processor_model'=>$request->get('processor_model'),
            'processor_tehnology'=>$request->get('processor_tehnology'),
            'processor_frequency'=>$request->get('processor_frequency'),
            'processor_stocket'=>$request->get('processor_stocket'),
            'processor_manufactures'=>$request->get('processor_manufacturer'),
            'number_of_cores'=>$request->get('number_of_cores'),
            'cache'=>$request->get('chache'),
            'integrated_graphics_processor'=>$request->get('integrated_graphics_processor'),
            'product_id'=>$request->get('product_id'),
        ]);



        SpecificationVideoCard::create([
            'videocard_type'=>$request->get('video_card_type'),
            'videocard_manufacturer'=>$request->get('video_card_manufacturer'),
            'chipset_video'=>$request->get('video_chipset'),
            'video_card_model'=>$request->get('video_card_model'),
            'video_memory_capacity'=>$request->get('video_memory_capacity'),
            'videocard_memory_type'=>$request->get('videocard_memory_capacity'),
            'videocard_memory_capacity'=>$request->get('videocard_memory_capacity'),
            'videocard_tehnologi'=>$request->get('video_card_technologies'),
            'videocard_ports'=>$request->get('video_card_ports'),
            'product_id'=>$request->get('product_id'),
        ]);


        SpecificationMotherBoard::create([
            'motherboard_manufacturer'=>$request->get('motherboard_manufacturer'),
            'socket_processor'=>$request->get('processor_stocket'),
            'chipset'=>$request->get('chipset'),
            'onboard_slots'=>$request->get('onboard_slots'),
            'back_panel_ports'=>$request->get('back_panel_ports'),
            'networck'=>$request->get('network'),
            'total_number_of_memory_slots'=>$request->get('total_number_of_memory_slots'),
            'product_id'=>$request->get('product_id'),
        ]);


        SpecificationMemory::create([
            'memory_capacity'=>$request->get('memory_capacity'),
            'memory_type'=>$request->get('memory_type'),
            'memory_manufacturer'=>$request->get('memory_manufacturer'),
            'memory_frequez'=>$request->get('memory_frequency'),
            'product_id'=>$request->get('product_id'),
        ]);


        SpecificationStorage::create([
            'storage_type'=>$request->get('storage_type'),
            'producer_&_SSD_model'=>$request->get('producer_&_SSD_model'),
            'SSD_capacity'=>$request->get('ssd_capacity'),
            'SSD_interface'=>$request->get('ssd_interface'),
            'product_id'=>$request->get('product_id'),
        ]);


        SpecificationPhotoVideo::create([
            'number_camera'=>$request->get('number_of_cameras'),
            'principal_camera_resolution'=>$request->get('main_camer_resolution'),
            'frontal_camera_resolution'=>$request->get('frontal_camera_resolution'),
            'video_rezolution'=>$request->get('rezolution_video'),
            'fot&video_features'=>$request->get('photo/video_feature'),
            'blit'=>$request->get('blit') == true ? '1':'0',
            'product_id'=>$request->get('product_id'),
        ]);


        SpecificationMultymedia::create([
            'optical_drive'=>$request->get('optical_drive'),
            'web_camera'=>$request->get('web_camera'),
            'audio'=>$request->get('audio'),
            'audio_tehnologii'=>$request->get('audio_tehnologii'),
            'loudspeaker_manufacturer'=>$request->get('loudspeaker_manufacturer'),
            'product_id'=>$request->get('product_id'),
        ]);



        SpecificationCase::create([
            'case_type'=>$request->get('case_type'),
            'motherboard_format_compatibility'=>$request->get('motherboard_format_compatibility'),
            'source_power'=>$request->get('source_power'),
            'processor_cooling_system'=>$request->get('processor_cooling_system'),
            'product_id'=>$request->get('product_id'),
        ]);




        return redirect()->route('view.products')->with('success','The specification was added successfully!');
    }


    public function edit(int $productId){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $product = Product::find($productId);

        $TaskCount = Task::all()->count();

        return view('admin.update-specification',compact('product','TaskCount'));
    }



    public function updateSpecification(int $productId,Request $request){

        if(!Gate::allows('admin')){
            abort(403);
        }


        $product = Product::where('id',$productId)->firstOrFail();

        $product->specificationGeneral->update([
            'device_type'=>$request->get('device_type'),
            'model'=>$request->get('model'),
            'tehnology'=>$request->get('tehnology'),
            'destined_for'=>$request->get('destined_for'),
            'conectivity'=>$request->get('connectivity'),
            'package_contents'=>$request->get('package_contents'),
            'operating_system'=>$request->get('operating_system'),
            'operation_system_version'=>$request->get('operating_system_version'),
            'line-up'=>$request->get('line-up'),
            'weight'=>$request->get('weight'),
            'height'=>$request->get('height'),
            'lenght'=>$request->get('length'),
            'dimension'=>$request->get('dimension'),
            'color'=>$request->get('color'),
            'SIM_slots'=>$request->get('sim_slots'),
            'SIM_type'=>$request->get('sim_type'),
            'bluetooth_version'=>$request->get('bluetooth_version'),
            'senzors'=>$request->get('senzors'),
            'relased_yaer'=>$request->get('year_of_appearance'),
            'product_id'=>$request->get('product_id'),
        ]);

        $product->specificationDisplay->update([
        'diagonal_display'=>$request->get('diagonal_display'),
        'format_display'=>$request->get('display_format'),
        'display_type'=>$request->get('display_type'),
        'tehnology_display'=>$request->get('display_tehnology'),
        'refresh_rate'=>$request->get('refresh_rate'),
        'luminozity'=>$request->get('luminosity'),
        'touchscreen'=>$request->get('touchscreen') == true ? '1':'0',
        'rezolution'=>$request->get('resolution'),
        'display_finish'=>$request->get('display_finish'),
        'display_functions'=>$request->get('display_functions'),
        'product_id'=>$request->get('product_id'),
        ]);



        $product->specificationProcessor->update([
            'processor_type'=>$request->get('processor_type'),
            'processor_model'=>$request->get('processor_model'),
            'processor_tehnology'=>$request->get('processor_tehnology'),
            'processor_frequency'=>$request->get('processor_frequency'),
            'processor_stocket'=>$request->get('processor_stocket'),
            'processor_manufactures'=>$request->get('processor_manufacturer'),
            'number_of_cores'=>$request->get('number_of_cores'),
            'cache'=>$request->get('chache'),
            'integrated_graphics_processor'=>$request->get('integrated_graphics_processor'),
            'product_id'=>$request->get('product_id'),
        ]);



        $product->specificationVideoCard->update([
            'videocard_type'=>$request->get('video_card_type'),
            'videocard_manufacturer'=>$request->get('video_card_manufacturer'),
            'chipset_video'=>$request->get('video_chipset'),
            'video_card_model'=>$request->get('video_card_model'),
            'video_memory_capacity'=>$request->get('video_memory_capacity'),
            'videocard_memory_type'=>$request->get('videocard_memory_capacity'),
            'videocard_memory_capacity'=>$request->get('videocard_memory_capacity'),
            'videocard_tehnologi'=>$request->get('video_card_technologies'),
            'videocard_ports'=>$request->get('video_card_ports'),
            'product_id'=>$request->get('product_id'),
        ]);


        $product->specificationMotherboard->update([
            'motherboard_manufacturer'=>$request->get('motherboard_manufacturer'),
            'socket_processor'=>$request->get('processor_stocket'),
            'chipset'=>$request->get('chipset'),
            'onboard_slots'=>$request->get('onboard_slots'),
            'back_panel_ports'=>$request->get('back_panel_ports'),
            'networck'=>$request->get('network'),
            'total_number_of_memory_slots'=>$request->get('total_number_of_memory_slots'),
            'product_id'=>$request->get('product_id'),
        ]);


        $product->specificationMemory->update([
            'memory_capacity'=>$request->get('memory_capacity'),
            'memory_type'=>$request->get('memory_type'),
            'memory_manufacturer'=>$request->get('memory_manufacturer'),
            'memory_frequez'=>$request->get('memory_frequency'),
            'product_id'=>$request->get('product_id'),
        ]);


        $product->specificationStorage->update([
            'storage_type'=>$request->get('storage_type'),
            'producer_&_SSD_model'=>$request->get('producer_&_SSD_model'),
            'SSD_capacity'=>$request->get('ssd_capacity'),
            'SSD_interface'=>$request->get('ssd_interface'),
            'product_id'=>$request->get('product_id'),
        ]);


        $product->specificationPhotoVideo->update([
            'number_camera'=>$request->get('number_of_cameras'),
            'principal_camera_resolution'=>$request->get('main_camer_resolution'),
            'frontal_camera_resolution'=>$request->get('frontal_camera_resolution'),
            'video_rezolution'=>$request->get('rezolution_video'),
            'fot&video_features'=>$request->get('photo/video_feature'),
            'blit'=>$request->get('blit') == true ? '1':'0',
            'product_id'=>$request->get('product_id'),
        ]);


        $product->specificationMultyMedia->update([
            'optical_drive'=>$request->get('optical_drive'),
            'web_camera'=>$request->get('web_camera'),
            'audio'=>$request->get('audio'),
            'audio_tehnologii'=>$request->get('audio_tehnologii'),
            'loudspeaker_manufacturer'=>$request->get('loudspeaker_manufacturer'),
            'product_id'=>$request->get('product_id'),
        ]);



        $product->specificationCase->update([
            'case_type'=>$request->get('case_type'),
            'motherboard_format_compatibility'=>$request->get('motherboard_format_compatibility'),
            'source_power'=>$request->get('source_power'),
            'processor_cooling_system'=>$request->get('processor_cooling_system'),
            'product_id'=>$request->get('product_id'),
        ]);


        return redirect()->route('view.products')->with('success','The specification was updated successfully!');
    }
}
