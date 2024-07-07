<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\ContactPolicy;
use App\Models\InformationCollectedPolicy;
use App\Models\InformationProtectionPolicy;
use App\Models\InformationSharingPolicy;
use App\Models\PolicyforChildrenPolicy;
use App\Models\PrivacyPolicypolicy;
use App\Models\PrivacyPolicyUpdatesPolicy;
use App\Models\UseofInformationPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        if(Auth::check()){
             
            $cartCount = Cart::where('user_id',auth()->user()->id);

            return view('user.privacy',compact('cartCount','policy','information','useOfInformation','informationPolicy','informationSharing','policychildren','policyupdate','contactpolicy'));
        }else{
            return view('user.privacy',compact('policy','information','useOfInformation','informationPolicy','informationSharing','policychildren','policyupdate','contactpolicy'));
        }

        
    }
}
