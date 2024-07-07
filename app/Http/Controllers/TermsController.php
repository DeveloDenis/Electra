<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\ChangestoTermsandConditionsTerms;
use App\Models\CopyrightIntellectualPropertyTerms;
use App\Models\DeliveryandReturnsTerms;
use App\Models\LimitationofLiabilityTerms;
use App\Models\OrdersandPaymentsTerms;
use App\Models\PersonalInformationandPrivacyTerms;
use App\Models\UseOfTheSiteTerms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TermsController extends Controller
{
    

    public function view(){

        $useTheSiteTerms = UseOfTheSiteTerms::first();
        $PersonalInformationandPrivacy = PersonalInformationandPrivacyTerms::first();
        $ordersabdPaymentsTerms = OrdersandPaymentsTerms::first();
        $deliveryReturns = DeliveryandReturnsTerms::first();
        $copyright = CopyrightIntellectualPropertyTerms::first();
        $limit = LimitationofLiabilityTerms::first();
        $changes = ChangestoTermsandConditionsTerms::first();

        if(Auth::check()){
            $cartCount = Cart::where('user_id',auth()->user()->id);

            return view('user.terms&police',compact('cartCount','useTheSiteTerms','PersonalInformationandPrivacy','ordersabdPaymentsTerms','deliveryReturns','copyright','limit','changes'));
        }else{

            return view('user.terms&police',compact('useTheSiteTerms','PersonalInformationandPrivacy','ordersabdPaymentsTerms','deliveryReturns','copyright','limit','changes'));
        }
        
    }
}
