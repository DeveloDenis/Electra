<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChangestoTermsandConditionsTerms;
use App\Models\CopyrightIntellectualPropertyTerms;
use App\Models\DeliveryandReturnsTerms;
use App\Models\LimitationofLiabilityTerms;
use App\Models\OrdersandPaymentsTerms;
use App\Models\PersonalInformationandPrivacyTerms;
use App\Models\Task;
use App\Models\UseOfTheSiteTerms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TermsController extends Controller
{
    

    public function view(){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $useTheSiteTerms = UseOfTheSiteTerms::first();
        $PersonalInformationandPrivacy = PersonalInformationandPrivacyTerms::first();
        $ordersabdPaymentsTerms = OrdersandPaymentsTerms::first();
        $deliveryReturns = DeliveryandReturnsTerms::first();
        $copyright = CopyrightIntellectualPropertyTerms::first();
        $limit = LimitationofLiabilityTerms::first();
        $changes = ChangestoTermsandConditionsTerms::first();


        $TaskCount = Task::all()->count();

        return view('admin.create-terms',compact('useTheSiteTerms','PersonalInformationandPrivacy','ordersabdPaymentsTerms','deliveryReturns','copyright','limit','changes','TaskCount'));
    }

    public function create(Request $request){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $useTheSiteTerms = UseOfTheSiteTerms::first();



        if($useTheSiteTerms  ){

         
            $useTheSiteTerms->update([
                'paragraph1'=>$request->get('paragraph1'),
                'paragraph2'=>$request->get('paragraph2'),
                'paragraph3'=>$request->get('paragraph3'),
                'paragraph4'=>$request->get('paragraph4'),
                'paragraph5'=>$request->get('paragraph5'),
                'paragraph6'=>$request->get('paragraph6'),
                'paragraph7'=>$request->get('paragraph7'),
                'paragraph8'=>$request->get('paragraph8'),
                'paragraph9'=>$request->get('paragraph9'),
                'paragraph10'=>$request->get('paragraph10'),
         ]);


        }else{


            UseOfTheSiteTerms::create([
                'paragraph1'=>$request->get('paragraph1'),
                'paragraph2'=>$request->get('paragraph2'),
                'paragraph3'=>$request->get('paragraph3'),
                'paragraph4'=>$request->get('paragraph4'),
                'paragraph5'=>$request->get('paragraph5'),
                'paragraph6'=>$request->get('paragraph6'),
                'paragraph7'=>$request->get('paragraph7'),
                'paragraph8'=>$request->get('paragraph8'),
                'paragraph9'=>$request->get('paragraph9'),
                'paragraph10'=>$request->get('paragraph10'),
         ]);


        }


        $PersonalInformationandPrivacy = PersonalInformationandPrivacyTerms::first();
        
        if($PersonalInformationandPrivacy){
  
            $PersonalInformationandPrivacy->update([
                'paragraph1'=>$request->get('paragraph11'),
                'paragraph2'=>$request->get('paragraph12'),
                'paragraph3'=>$request->get('paragraph13'),
                'paragraph4'=>$request->get('paragraph14'),
                'paragraph5'=>$request->get('paragraph15'),
                'paragraph6'=>$request->get('paragraph16'),
                'paragraph7'=>$request->get('paragraph17'),
                'paragraph8'=>$request->get('paragraph18'),
                'paragraph9'=>$request->get('paragraph19'),
                'paragraph10'=>$request->get('paragraph20'),
            ]);

        }else{
            PersonalInformationandPrivacyTerms::create([
                'paragraph1'=>$request->get('paragraph11'),
                'paragraph2'=>$request->get('paragraph12'),
                'paragraph3'=>$request->get('paragraph13'),
                'paragraph4'=>$request->get('paragraph14'),
                'paragraph5'=>$request->get('paragraph15'),
                'paragraph6'=>$request->get('paragraph16'),
                'paragraph7'=>$request->get('paragraph17'),
                'paragraph8'=>$request->get('paragraph18'),
                'paragraph9'=>$request->get('paragraph19'),
                'paragraph10'=>$request->get('paragraph20'),
            ]);
        }


        $ordersabdPaymentsTerms = OrdersandPaymentsTerms::first();

      

        if($ordersabdPaymentsTerms){

            $ordersabdPaymentsTerms->update([
                'paragraph1'=>$request->get('paragraph21'),
                'paragraph2'=>$request->get('paragraph22'),
                'paragraph3'=>$request->get('paragraph23'),
                'paragraph4'=>$request->get('paragraph24'),
                'paragraph5'=>$request->get('paragraph25'),
                'paragraph6'=>$request->get('paragraph26'),
                'paragraph7'=>$request->get('paragraph27'),
                'paragraph8'=>$request->get('paragraph28'),
                'paragraph9'=>$request->get('paragraph29'),
                'paragraph10'=>$request->get('paragraph30'), 
            ]);
    

        }else{

            OrdersandPaymentsTerms::create([
                'paragraph1'=>$request->get('paragraph21'),
                'paragraph2'=>$request->get('paragraph22'),
                'paragraph3'=>$request->get('paragraph23'),
                'paragraph4'=>$request->get('paragraph24'),
                'paragraph5'=>$request->get('paragraph25'),
                'paragraph6'=>$request->get('paragraph26'),
                'paragraph7'=>$request->get('paragraph27'),
                'paragraph8'=>$request->get('paragraph28'),
                'paragraph9'=>$request->get('paragraph29'),
                'paragraph10'=>$request->get('paragraph30'), 
            ]);
    

        }


        $deliveryReturns = DeliveryandReturnsTerms::first();

        if($deliveryReturns){

            $deliveryReturns->update([
                'paragraph1'=>$request->get('paragraph31'),
                'paragraph2'=>$request->get('paragraph32'),
                'paragraph3'=>$request->get('paragraph33'),
                'paragraph4'=>$request->get('paragraph34'),
                'paragraph5'=>$request->get('paragraph35'),
                'paragraph6'=>$request->get('paragraph36'),
                'paragraph7'=>$request->get('paragraph37'),
                'paragraph8'=>$request->get('paragraph38'),
                'paragraph9'=>$request->get('paragraph39'),
                'paragraph10'=>$request->get('paragraph40'), 
            ]);


        }else{

            DeliveryandReturnsTerms::create([
                'paragraph1'=>$request->get('paragraph31'),
                'paragraph2'=>$request->get('paragraph32'),
                'paragraph3'=>$request->get('paragraph33'),
                'paragraph4'=>$request->get('paragraph34'),
                'paragraph5'=>$request->get('paragraph35'),
                'paragraph6'=>$request->get('paragraph36'),
                'paragraph7'=>$request->get('paragraph37'),
                'paragraph8'=>$request->get('paragraph38'),
                'paragraph9'=>$request->get('paragraph39'),
                'paragraph10'=>$request->get('paragraph40'), 
            ]);

        }


        $copyright = CopyrightIntellectualPropertyTerms::first();
        

        if($copyright){

            $copyright->update([
                'paragraph1'=>$request->get('paragraph41'),
                'paragraph2'=>$request->get('paragraph42'),
                'paragraph3'=>$request->get('paragraph43'),
                'paragraph4'=>$request->get('paragraph44'),
                'paragraph5'=>$request->get('paragraph45'),
                'paragraph6'=>$request->get('paragraph46'),
                'paragraph7'=>$request->get('paragraph47'),
                'paragraph8'=>$request->get('paragraph48'),
                'paragraph9'=>$request->get('paragraph49'),
                'paragraph10'=>$request->get('paragraph50'),   
            ]);

        }else{

            CopyrightIntellectualPropertyTerms::create([
                'paragraph1'=>$request->get('paragraph41'),
                'paragraph2'=>$request->get('paragraph42'),
                'paragraph3'=>$request->get('paragraph43'),
                'paragraph4'=>$request->get('paragraph44'),
                'paragraph5'=>$request->get('paragraph45'),
                'paragraph6'=>$request->get('paragraph46'),
                'paragraph7'=>$request->get('paragraph47'),
                'paragraph8'=>$request->get('paragraph48'),
                'paragraph9'=>$request->get('paragraph49'),
                'paragraph10'=>$request->get('paragraph50'),   
            ]);

        }
        


        $limit = LimitationofLiabilityTerms::first();


        if($limit){

            $limit->update([
                'paragraph1'=>$request->get('paragraph51'),
                'paragraph2'=>$request->get('paragraph52'),
                'paragraph3'=>$request->get('paragraph53'),
                'paragraph4'=>$request->get('paragraph54'),
                'paragraph5'=>$request->get('paragraph55'),
                'paragraph6'=>$request->get('paragraph56'),
                'paragraph7'=>$request->get('paragraph57'),
                'paragraph8'=>$request->get('paragraph58'),
                'paragraph9'=>$request->get('paragraph59'),
                'paragraph10'=>$request->get('paragraph60'),   
            ]);

        }else{

            LimitationofLiabilityTerms::create([
                'paragraph1'=>$request->get('paragraph51'),
                'paragraph2'=>$request->get('paragraph52'),
                'paragraph3'=>$request->get('paragraph53'),
                'paragraph4'=>$request->get('paragraph54'),
                'paragraph5'=>$request->get('paragraph55'),
                'paragraph6'=>$request->get('paragraph56'),
                'paragraph7'=>$request->get('paragraph57'),
                'paragraph8'=>$request->get('paragraph58'),
                'paragraph9'=>$request->get('paragraph59'),
                'paragraph10'=>$request->get('paragraph60'),   
            ]);

        }




        $changes = ChangestoTermsandConditionsTerms::first();

       
        if($changes){

            $changes->update([
                'paragraph1'=>$request->get('paragraph61'),
                'paragraph2'=>$request->get('paragraph62'),
                'paragraph3'=>$request->get('paragraph63'),
                'paragraph4'=>$request->get('paragraph64'),
                'paragraph5'=>$request->get('paragraph65'),
                'paragraph6'=>$request->get('paragraph66'),
                'paragraph7'=>$request->get('paragraph67'),
                'paragraph8'=>$request->get('paragraph68'),
                'paragraph9'=>$request->get('paragraph69'),
                'paragraph10'=>$request->get('paragraph70'),  
            ]);

        }else{

            ChangestoTermsandConditionsTerms::create([
                'paragraph1'=>$request->get('paragraph61'),
                'paragraph2'=>$request->get('paragraph62'),
                'paragraph3'=>$request->get('paragraph63'),
                'paragraph4'=>$request->get('paragraph64'),
                'paragraph5'=>$request->get('paragraph65'),
                'paragraph6'=>$request->get('paragraph66'),
                'paragraph7'=>$request->get('paragraph67'),
                'paragraph8'=>$request->get('paragraph68'),
                'paragraph9'=>$request->get('paragraph69'),
                'paragraph10'=>$request->get('paragraph70'),  
            ]);
            
        }

       
        return redirect()->back()->with('success','The information was changed successfully!');

        }
}
