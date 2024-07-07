<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactPolicy;
use App\Models\InformationCollectedPolicy;
use App\Models\InformationProtectionPolicy;
use App\Models\InformationSharingPolicy;
use App\Models\PolicyforChildrenPolicy;
use App\Models\PrivacyPolicypolicy;
use App\Models\PrivacyPolicyUpdatesPolicy;
use App\Models\Task;
use App\Models\UseofInformationPolicy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    

    public function view(){

        $policy = PrivacyPolicypolicy::first();
        $information = InformationCollectedPolicy::first();
        $useOfInformation = UseofInformationPolicy::first();
        $informationPolicy = InformationProtectionPolicy::first();
        $informationSharing = InformationSharingPolicy::first();
        $policychildren = PolicyforChildrenPolicy::first();
        $policyupdate = PrivacyPolicyUpdatesPolicy::first();
        $contactpolicy = ContactPolicy::first();

        $TaskCount = Task::all()->count();

        return view('admin.create-policy',compact('policy','information','useOfInformation','informationPolicy','informationSharing','policychildren','policyupdate','contactpolicy','TaskCount'));
    }


    public function create(Request $request){


        $policy = PrivacyPolicypolicy::first();

        if($policy){

           $policy->update([
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


            PrivacyPolicypolicy::create([
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


        $information = InformationCollectedPolicy::first();

        if($information){

            $information->update([
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

            InformationCollectedPolicy::create([
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


        $useOfInformation = UseofInformationPolicy::first();


        if($useOfInformation){

          $useOfInformation->update([
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

            UseofInformationPolicy::create([
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


        $informationPolicy = InformationProtectionPolicy::first();


        if($informationPolicy){


              $informationPolicy->update([
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

            InformationProtectionPolicy::create([
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


        $informationSharing = InformationSharingPolicy::first();



        if($informationSharing){

            $informationSharing->update([
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


            InformationSharingPolicy::create([
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



        $policychildren = PolicyforChildrenPolicy::first();


        if($policychildren){


            $policychildren->update([
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


            PolicyforChildrenPolicy::create([
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



        $policyupdate = PrivacyPolicyUpdatesPolicy::first();


        if($policyupdate){

            $policyupdate->update([
                'paragraph1'=>$request->get('paragraph61'),
                'paragraph2'=>$request->get('paragraph52'),
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

            PrivacyPolicyUpdatesPolicy::create([

                'paragraph1'=>$request->get('paragraph61'),
                'paragraph2'=>$request->get('paragraph52'),
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



        $contactpolicy = ContactPolicy::first();


        if($contactpolicy){

            $contactpolicy->update([
                'paragraph1'=>$request->get('paragraph71'),
                'paragraph2'=>$request->get('paragraph72'),
                'paragraph3'=>$request->get('paragraph73'),
                'paragraph4'=>$request->get('paragraph74'),
                'paragraph5'=>$request->get('paragraph75'),
                'paragraph6'=>$request->get('paragraph76'),
                'paragraph7'=>$request->get('paragraph77'),
                'paragraph8'=>$request->get('paragraph78'),
                'paragraph9'=>$request->get('paragraph79'),
                'paragraph10'=>$request->get('paragraph80'),
            ]);
        }else{


            ContactPolicy::create([
                'paragraph1'=>$request->get('paragraph71'),
                'paragraph2'=>$request->get('paragraph72'),
                'paragraph3'=>$request->get('paragraph73'),
                'paragraph4'=>$request->get('paragraph74'),
                'paragraph5'=>$request->get('paragraph75'),
                'paragraph6'=>$request->get('paragraph76'),
                'paragraph7'=>$request->get('paragraph77'),
                'paragraph8'=>$request->get('paragraph78'),
                'paragraph9'=>$request->get('paragraph79'),
                'paragraph10'=>$request->get('paragraph80'),
            ]);
        }


        return redirect()->back()->with('success','The information was changed successfully!');

    }
}
