@extends('extenders.layout')


@section('title', 'Terms & Conditions')


@section('style')


<style>


@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap");

:root {
  
  --white: #ffffff;
  --text-clr: #464646;
  --tabs-list-bg-clr: #029ef1;
  --btn-hvr: #029ef1;
  
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  font-family: "Open Sans", sans-serif;
}

body{
  background: #f1f1f1;
  
  color: var(--text-clr);
}

.flex_align_justify{
  display: flex;
  align-items: center;
  justify-content: center;
}

.wrapper{
  min-height: 100vh;
  padding: 0 20px;
}

.tc_wrap{
  width: 700px;
  max-width: 100%;
  height: 450px;
  background: var(--white);
  display: flex;
  border-radius: 3px;
  overflow: hidden;
}

.tc_wrap .tabs_list{
  width: 150px;
  background: var(--tabs-list-bg-clr);
  height: 100%;
}

.tc_wrap .tabs_content{
  width: calc(100% - 200px);
  padding: 0 10px 0 20px;
  height: 100%;
}

.tc_wrap .tabs_content .tab_head,
.tc_wrap .tabs_content .tab_foot{
  color: var(--primary-clr);
  padding: 25px 0;
  height: 120px;
}

.tc_wrap .tabs_content .tab_head{
  text-align: center;
}

.tc_wrap .tabs_content .tab_body{
  height: calc(100% - 140px);
  width:300px;
  overflow: auto;
}

@media only screen and (max-width: 500px){

  .tc_wrap .tabs_content .tab_body{
  height: calc(100% - 140px);
  width:150px;
  overflow: auto;
}

@media only screen and (max-width: 768){

  .tc_wrap .tabs_content .tab_body{
  height: calc(100% - 140px);
  width:300px;
  overflow: auto;
}

}

}

.tc_wrap .tabs_list ul{
  padding: 70px 20px;
  text-align: right;
}

.tc_wrap .tabs_list ul li{
  padding: 10px 0;
  position: relative;
  margin-bottom: 3px;
  cursor: pointer;
  font-weight: bold;
  transition: all 0.5s ease;
}

.tc_wrap .tabs_list ul li:before{
  content: "";
  position: absolute;
  top: 0;
  right: -20px;
  width: 2px;
  height: 100%;
  background: var(--primary-clr);
  opacity: 0;
  transition: all 0.5s ease;
}

.tc_wrap .tabs_list ul li.active,
.tc_wrap .tabs_list ul li:hover{
  color: var(--primary-clr);
}

.tc_wrap .tabs_list ul li.active:before{
  opacity: 1;
}

.tc_wrap .tabs_content .tab_body .tab_item h3{
  padding-top: 10px;
  margin-bottom: 10px;
  color: var(--primary-clr);
}

.tc_wrap .tabs_content .tab_body .tab_item p{
  margin-bottom: 20px;
}

.tc_wrap .tabs_content .tab_body .tab_item.active{
  display: block !important;
}

.tc_wrap .tabs_content .tab_foot button{
    width: 125px;
    padding: 5px 10px; 
    background: transparent;
    border: 1px solid;
    border-radius: 25px;
  cursor: pointer;
  transition: all 0.5s ease;
}

.tc_wrap .tabs_content .tab_foot button.decline{
  margin-right: 15px;
  border-color: var(--tabs-list-bg-clr);
  color: var(--tabs-list-bg-clr);
}

.tc_wrap .tabs_content .tab_foot button.agree{
   background: var(--primary-clr);
  border-color: var(--primary-clr);
  color: var(--white);
}

.tc_wrap .tabs_content .tab_foot button.decline:hover{
  background: var(--tabs-list-bg-clr);
  color: var(--white);
}

.tc_wrap .tabs_content .tab_foot button.agree:hover{
  background: var(--btn-hvr);
  border-color: var(--btn-hvr);
}


.title{
    color:#0989e5;
}

.subtitle{
    color:#fff;
}

.subtitle1{
    color:#0989e5;
}
</style>


@endsection



@section('content')

@include('extenders.navbar')


<div class="wrapper flex_align_justify">
    <div class="tc_wrap">
        <div class="tabs_list">
          <ul>
            @if($useTheSiteTerms)

            
            <li data-tc="tab_item_1" class="active subtitle" style="font-size: 12px;">Use of the Site</li>

            @else


            @endif


            @if($PersonalInformationandPrivacy)
            <li data-tc="tab_item_2" class="subtitle" style="font-size: 12px;">Personal Information and Privacy</li>

            @else


            @endif

            @if($ordersabdPaymentsTerms)
            <li data-tc="tab_item_3" class="subtitle" style="font-size: 12px;">Orders and Payments</li>

                @else

            @endif

            @if($deliveryReturns)
            <li data-tc="tab_item_4" class="subtitle" style="font-size: 12px;">Delivery and Returns</li>

            @else

            @endif

            @if($copyright)
            <li data-tc="tab_item_5" class="subtitle" style="font-size: 12px;">Copyright and Intellectual Property</li>

            @else

            @endif

            @if($limit)
            <li data-tc="tab_item_6" class="subtitle" style="font-size: 12px;">Limitation of Liability</li>

            @else

            @endif

            @if($changes)
            <li data-tc="tab_item_7" class="subtitle" style="font-size: 12px;">Changes to Terms and Conditions</li>


            @else

            @endif
          </ul>
        </div>
        <div class="tabs_content">
           <div class="tab_head">
             <h2 class="title ">Terms & Conditions</h2>
             
           </div>
           <div class="tab_body">

            @if($useTheSiteTerms)
             <div class="tab_item tab_item_1">
                 <h3 style="color:#0989e5;">Use of the Site</h3>

                 <h6>Updated at: {{$useTheSiteTerms->updated_at->format('Y-m-d')}}</h6>

                 @if($useTheSiteTerms->paragraph1)
                 <p style="font-size: 12px;">{{$useTheSiteTerms->paragraph1}}</p>

                 @else

                 @endif

                 
                 @if($useTheSiteTerms->paragraph2)
                 <p style="font-size: 12px;">{{$useTheSiteTerms->paragraph2}}</p>

                 @else

                 @endif


                 @if($useTheSiteTerms->paragraph3)
                 <p style="font-size: 12px;">{{$useTheSiteTerms->paragraph3}}</p>

                 @else

                 @endif


                 @if($useTheSiteTerms->paragraph4)
                 <p style="font-size: 12px;">{{$useTheSiteTerms->paragraph4}}</p>

                 @else

                 @endif


                 @if($useTheSiteTerms->paragraph5)
                 <p style="font-size: 12px;">{{$useTheSiteTerms->paragraph5}}</p>

                 @else

                 @endif


                 @if($useTheSiteTerms->paragraph6)
                 <p style="font-size: 12px;">{{$useTheSiteTerms->paragraph6}}</p>

                 @else

                 @endif


                 @if($useTheSiteTerms->paragraph7)
                 <p style="font-size: 12px;">{{$useTheSiteTerms->paragraph7}}</p>

                 @else

                 @endif


                 @if($useTheSiteTerms->paragraph8)
                 <p style="font-size: 12px;">{{$useTheSiteTerms->paragraph8}}</p>

                 @else

                 @endif


                 @if($useTheSiteTerms->paragraph9)
                 <p style="font-size: 12px;">{{$useTheSiteTerms->paragraph9}}</p>

                 @else

                 @endif


                 @if($useTheSiteTerms->paragraph10)
                 <p style="font-size: 12px;">{{$useTheSiteTerms->paragraph10}}</p>

                 @else

                 @endif


                 @else

                 @endif
               
             </div>

             @if($PersonalInformationandPrivacy)
             <div class="tab_item tab_item_2" style="display: none;">
                 <h3 style="color:#0989e5;">Personal Information and Privacy</h3>
               
                 @if($PersonalInformationandPrivacy->paragraph1)
                 <p style="font-size: 12px;">{{$PersonalInformationandPrivacy->paragraph1}}</p>

                 @else

                 @endif

                 @if($PersonalInformationandPrivacy->paragraph2)
                 <p style="font-size: 12px;">{{$PersonalInformationandPrivacy->paragraph2}}</p>

                 @else

                 @endif


                 @if($PersonalInformationandPrivacy->paragraph3)
                 <p style="font-size: 12px;">{{$PersonalInformationandPrivacy->paragraph3}}</p>

                 @else

                 @endif


                 @if($PersonalInformationandPrivacy->paragraph4)
                 <p style="font-size: 12px;">{{$PersonalInformationandPrivacy->paragraph4}}</p>

                 @else

                 @endif


                 @if($PersonalInformationandPrivacy->paragraph5)
                 <p style="font-size: 12px;">{{$PersonalInformationandPrivacy->paragraph5}}</p>

                 @else

                 @endif



                 @if($PersonalInformationandPrivacy->paragraph6)
                 <p style="font-size: 12px;">{{$PersonalInformationandPrivacy->paragraph6}}</p>

                 @else

                 @endif



                 @if($PersonalInformationandPrivacy->paragraph7)
                 <p style="font-size: 12px;">{{$PersonalInformationandPrivacy->paragraph7}}</p>

                 @else

                 @endif


                 @if($PersonalInformationandPrivacy->paragraph8)
                 <p style="font-size: 12px;">{{$PersonalInformationandPrivacy->paragraph8}}</p>

                 @else

                 @endif


                 @if($PersonalInformationandPrivacy->paragraph9)
                 <p style="font-size: 12px;">{{$PersonalInformationandPrivacy->paragraph9}}</p>

                 @else

                 @endif


                 @if($PersonalInformationandPrivacy->paragraph10)
                 <p style="font-size: 12px;">{{$PersonalInformationandPrivacy->paragraph10}}</p>

                 @else

                 @endif

              
             </div>

             @else

             @endif


             @if($ordersabdPaymentsTerms)
             <div class="tab_item tab_item_3"  style="display: none;">
                 <h3 style="color:#0989e5;">Orders and Payments</h3>
                 
                 @if($ordersabdPaymentsTerms->paragraph1)
                 <p style="font-size: 12px;">{{$ordersabdPaymentsTerms->paragraph1}}</p>

                 @else

                 @endif


                 @if($ordersabdPaymentsTerms->paragraph2)
                 <p style="font-size: 12px;">{{$ordersabdPaymentsTerms->paragraph2}}</p>

                 @else

                 @endif


                 @if($ordersabdPaymentsTerms->paragraph3)
                 <p style="font-size: 12px;">{{$ordersabdPaymentsTerms->paragraph3}}</p>

                 @else

                 @endif


                 @if($ordersabdPaymentsTerms->paragraph4)
                 <p style="font-size: 12px;">{{$ordersabdPaymentsTerms->paragraph4}}</p>

                 @else

                 @endif


                 @if($ordersabdPaymentsTerms->paragraph5)
                 <p style="font-size: 12px;">{{$ordersabdPaymentsTerms->paragraph5}}</p>

                 @else

                 @endif

                 @if($ordersabdPaymentsTerms->paragraph6)
                 <p style="font-size: 12px;">{{$ordersabdPaymentsTerms->paragraph6}}</p>

                 @else


                 @endif


                 @if($ordersabdPaymentsTerms->paragraph7)
                 <p style="font-size: 12px;">{{$ordersabdPaymentsTerms->paragraph7}}</p>

                 @else

                 @endif


                 @if($ordersabdPaymentsTerms->paragraph8)
                 <p style="font-size: 12px;">{{$ordersabdPaymentsTerms->paragraph8}}</p>

                 @else

                 @endif


                 @if($ordersabdPaymentsTerms->paragraph9)
                 <p style="font-size: 12px;">{{$ordersabdPaymentsTerms->paragraph9}}</p>

                 @else

                 @endif



                 @if($ordersabdPaymentsTerms->paragraph10)
                 <p style="font-size: 12px;">{{$ordersabdPaymentsTerms->paragraph10}}</p>

                 @else

                 @endif

             </div>


             @else


             @endif


             @if($deliveryReturns)
             <div class="tab_item tab_item_4"  style="display: none;">
                 <h3 style="color:#0989e5;">Delivery and Returns</h3>
              
               
                 @if($deliveryReturns->paragraph1)
                 <p style="font-size: 12px;">{{$deliveryReturns->paragraph1}}</p>

                 @else

                 @endif

                 @if($deliveryReturns->paragraph2)
                 <p style="font-size: 12px;">{{$deliveryReturns->paragraph2}}</p>

                 @else

                 @endif

                 @if($deliveryReturns->paragraph3)
                 <p style="font-size: 12px;">{{$deliveryReturns->paragraph3}}</p>

                 @else

                 @endif

                 @if($deliveryReturns->paragraph4)
                 <p style="font-size: 12px;">{{$deliveryReturns->paragraph4}}</p>

                 @else

                 @endif

                 @if($deliveryReturns->paragraph5)
                 <p style="font-size: 12px;">{{$deliveryReturns->paragraph5}}</p>

                 @else

                 @endif


                 @if($deliveryReturns->paragraph6)
                 <p style="font-size: 12px;">{{$deliveryReturns->paragraph6}}</p>

                 @else

                 @endif

                 @if($deliveryReturns->paragraph7)
                 <p style="font-size: 12px;">{{$deliveryReturns->paragraph7}}</p>

                 @else

                 @endif


                 @if($deliveryReturns->paragraph8)
                 <p style="font-size: 12px;">{{$deliveryReturns->paragraph8}}</p>

                 @else

                 @endif

                 @if($deliveryReturns->paragraph9)
                 <p style="font-size: 12px;">{{$deliveryReturns->paragraph9}}</p>

                 @else

                 @endif


                 @if($deliveryReturns->paragraph10)
                 <p style="font-size: 12px;">{{$deliveryReturns->paragraph10}}</p>

                 @else

                 @endif

             </div>


             @else

             @endif

            @if($copyright)
             <div class="tab_item tab_item_5"  style="display: none;">
                 <h3 style="color:#0989e5;" >Copyright and Intellectual Property</h3>
               
                 @if($copyright->paragraph1)
                 <p style="font-size: 12px;">{{$copyright->paragraph1}}</p>

                 @else

                 @endif


                 @if($copyright->paragraph2)
                 <p style="font-size: 12px;">{{$copyright->paragraph2}}</p>

                 @else

                 @endif


                 @if($copyright->paragraph3)
                 <p style="font-size: 12px;">{{$copyright->paragraph3}}</p>

                 @else

                 @endif

                 @if($copyright->paragraph4)
                 <p style="font-size: 12px;">{{$copyright->paragraph4}}</p>

                 @else

                 @endif

                 @if($copyright->paragraph5)
                 <p style="font-size: 12px;">{{$copyright->paragraph5}}</p>

                 @else

                 @endif

                 @if($copyright->paragraph6)
                 <p style="font-size: 12px;">{{$copyright->paragraph6}}</p>

                 @else

                 @endif

                 @if($copyright->paragraph7)
                 <p style="font-size: 12px;">{{$copyright->paragraph7}}</p>

                 @else

                 @endif

                 @if($copyright->paragraph8)
                 <p style="font-size: 12px;">{{$copyright->paragraph8}}</p>

                 @else

                 @endif


                 @if($copyright->paragraph9)
                 <p style="font-size: 12px;">{{$copyright->paragraph9}}</p>

                 @else

                 @endif
                 
                 @if($copyright->paragraph10)
                 <p style="font-size: 12px;">{{$copyright->paragraph10}}</p>

                 @else

                 @endif
             </div>


             @else

             @endif


             @if($limit)

             <div class="tab_item tab_item_6"  style="display: none;">
                 <h3 style="color:#0989e5;" >Limitation of Liability</h3>

                 @if($limit->paragraph1)
                 <p style="font-size: 12px;">{{$limit->paragraph1}}</p>

                 @else

                 @endif

                 @if($limit->paragraph2)
                 <p style="font-size: 12px;">{{$limit->paragraph2}}</p>

                 @else

                 @endif

                 @if($limit->paragraph3)
                 <p style="font-size: 12px;">{{$limit->paragraph3}}</p>

                 @else

                 @endif


                 @if($limit->paragraph4)
                 <p style="font-size: 12px;">{{$limit->paragraph4}}</p>

                 @else

                 @endif


                 @if($limit->paragraph5)
                 <p style="font-size: 12px;">{{$limit->paragraph5}}</p>

                 @else

                 @endif


                 @if($limit->paragraph6)
                 <p style="font-size: 12px;">{{$limit->paragraph6}}</p>

                 @else

                 @endif


                 @if($limit->paragraph7)
                 <p style="font-size: 12px;">{{$limit->paragraph7}}</p>

                 @else

                 @endif


                 @if($limit->paragraph8)
                 <p style="font-size: 12px;">{{$limit->paragraph8}}</p>

                 @else

                 @endif


                 @if($limit->paragraph9)
                 <p style="font-size: 12px;">{{$limit->paragraph9}}</p>

                 @else

                 @endif

                 @if($limit->paragraph10)
                 <p style="font-size: 12px;">{{$limit->paragraph10}}</p>

                 @else

                 @endif
             </div>

             @else

             @endif


             @if($changes)
             <div class="tab_item tab_item_7"  style="display: none;">
                 <h3 style="color:#0989e5;" >Changes to Terms and Conditions</h3>
              
                 @if($changes->paragraph1)
                 <p style="font-size: 12px;">{{$changes->paragraph1}}</p>

                 @else

                 @endif


                 @if($changes->paragraph2)
                 <p style="font-size: 12px;">{{$changes->paragraph2}}</p>

                 @else

                 @endif


                 @if($changes->paragraph3)
                 <p style="font-size: 12px;">{{$changes->paragraph3}}</p>

                 @else

                 @endif



                 @if($changes->paragraph4)
                 <p style="font-size: 12px;">{{$changes->paragraph4}}</p>

                 @else

                 @endif


                 @if($changes->paragraph5)
                 <p style="font-size: 12px;">{{$changes->paragraph5}}</p>

                 @else

                 @endif


                 @if($changes->paragraph6)
                 <p style="font-size: 12px;">{{$changes->paragraph6}}</p>

                 @else

                 @endif


                 @if($changes->paragraph7)
                 <p style="font-size: 12px;">{{$changes->paragraph7}}</p>

                 @else

                 @endif


                 @if($changes->paragraph8)
                 <p style="font-size: 12px;">{{$changes->paragraph8}}</p>

                 @else

                 @endif

                 @if($changes->paragraph9)
                 <p style="font-size: 12px;">{{$changes->paragraph9}}</p>

                 @else

                 @endif

                 @if($changes->paragraph10)
                 <p style="font-size: 12px;">{{$changes->paragraph10}}</p>

                 @else

                 @endif

             </div>

             @else

             @endif
           </div>
           
        </div>
    </div>
 </div>




@include('extenders.footer')


<script>

    var tab_lists = document.querySelectorAll(".tabs_list ul li");
    var tab_items = document.querySelectorAll(".tab_item"); 
    
    tab_lists.forEach(function(list){
      list.addEventListener("click", function(){
        var tab_data = list.getAttribute("data-tc");
        
        tab_lists.forEach(function(list){
          list.classList.remove("active");
        });
        list.classList.add("active");
        
        tab_items.forEach(function(item){
          var tab_class = item.getAttribute("class").split(" ");
          if(tab_class.includes(tab_data)){
            item.style.display = "block";
          }
          else{
            item.style.display = "none";
          }
          
        })
        
      })
    })
        
        </script>

@endsection