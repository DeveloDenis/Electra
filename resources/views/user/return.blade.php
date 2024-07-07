@extends('extenders.layout')

@section('title','How to Refound?')


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
        margin-top: 130px;
    }

    .how{
        font-weight: 600;
    }

    .process{
        font-weight: 600;
    }

</style>


@endsection


@section('content')

@include('extenders.navbar')

<div class="container1">
    <div class="row ">
        <div class="col-md-12 text-center">
            <h3 class="text-primary">How can I make a return?</h3>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-4   ">
            
            <h6 class="me-5 text-primary how">How can I make a return?</h6>
        </div>
    </div>
</div>

<div class="row ">
    <div class="col-md-10 me-5">

        <p>Products can be returned by courier within 30 days from the order delivery date, together with the return form. To request a return, you must log in to your customer account. If you have opted for Payment on Delivery, it is necessary to enter the bank account details in order to be reimbursed the value of the return.
            If other products are delivered to you than the ones you ordered, the return can only be made online, they cannot be returned in the store.</p>
    </div>
</div>

<div class="row ">
    <div class="col-md-10 me-5">

        <p>The products are your responsibility until they are delivered to the Electra warehouse, please ensure that they are properly packed and cannot be damaged en route.</p><br/>

        <p>All returned products will be checked upon delivery to the Electra warehouse. If it does not fall within the return terms (missing the invoice, the products are damaged or worn, etc.) we have the right to refuse the return and not to process the refund of the value of the products.</p>
    </div>
</div>


<div class="row ">
    <div class="col-md-10   ">
        
        <h6 class="me-5  process">Return process by courier</h6>

        <p>The products can be returned after you fill in the return form that you will find on the back.
            On the return form please choose the products you want to return, the number of products you want to return and choose the reason for the return.
            To request the Return it is necessary to log in to the Electra customer account. If you have opted for Payment on Delivery, it is necessary to enter the bank account data in order to be reimbursed the value of the return or you can choose the reimbursement to your account.
            The return request must be completed from your account opened on our website.
            After you create the return request, the courier will contact you in the next 48 hours about picking up the package.</p>
    </div>
</div>
</div>

@include('extenders.footer')
@endsection