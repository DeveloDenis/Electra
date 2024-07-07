@extends('extenders.layout')


@section('title','Privacy & Policy')


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
  height: 490px;
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

@media only screen and (max-width:500px){

  .tc_wrap .tabs_content .tab_body{
  height: calc(100% - 140px);
  width:150px;
  overflow: auto;
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

            @if($policy)
            <li data-tc="tab_item_1" class="active subtitle" style="font-size: 12px;">Privacy policy</li>

             @else

            @endif

            @if($information)
            <li data-tc="tab_item_2" class="subtitle" style="font-size: 12px;">Information Collected</li>

            @else

            @endif

            @if($useOfInformation)
            <li data-tc="tab_item_3" class="subtitle" style="font-size: 12px;">Use of Information</li>

            @else

            @endif

            @if($informationPolicy)
            <li data-tc="tab_item_4" class="subtitle" style="font-size: 12px;">Information Protection</li>

            @else

            @endif

            @if($informationSharing)
            <li data-tc="tab_item_5" class="subtitle" style="font-size: 12px;">Information Sharing</li>

            @else

            @endif

            @if($policychildren)
            <li data-tc="tab_item_6" class="subtitle" style="font-size: 12px;">Policy for Children</li>

            @else
           
            @endif

            @if($policyupdate)
            <li data-tc="tab_item_7" class="subtitle" style="font-size: 12px;">Privacy Policy Updates</li>

            @else

            @endif

            @if($contactpolicy)
            <li data-tc="tab_item_8" class="subtitle" style="font-size: 12px;">Contact</li>


            @else


            @endif
          </ul>
        </div>
        <div class="tabs_content">
           <div class="tab_head">
             <h2 class="title">Privacy & Policy</h2>
              
           </div>
           <div class="tab_body">

            @if($policy)
             <div class="tab_item tab_item_1">
                 
                 <h3 style="color:#0989e5;">Privacy policy</h3>
                 <h6>Updated at:{{$policy->updated_at->format('Y-m-d')}}</h6>

                 @if($policy->paragraph1)
                 <p style="font-size: 12px;">{{$policy->paragraph1}}</p>
                
                  @else

                 @endif


                 @if($policy->paragraph2)
                 <p style="font-size: 12px;">{{$policy->paragraph2}}</p>
                
                  @else

                 @endif

                 @if($policy->paragraph3)
                 <p style="font-size: 12px;">{{$policy->paragraph3}}</p>
                
                  @else

                 @endif


                 @if($policy->paragraph4)
                 <p style="font-size: 12px;">{{$policy->paragraph4}}</p>
                
                  @else

                 @endif


                 @if($policy->paragraph5)
                 <p style="font-size: 12px;">{{$policy->paragraph5}}</p>
                
                  @else

                 @endif


                 @if($policy->paragraph6)
                 <p style="font-size: 12px;">{{$policy->paragraph6}}</p>
                
                  @else

                 @endif


                 @if($policy->paragraph7)
                 <p style="font-size: 12px;">{{$policy->paragraph7}}</p>
                
                  @else

                 @endif


                 @if($policy->paragraph8)
                 <p style="font-size: 12px;">{{$policy->paragraph8}}</p>
                
                  @else

                 @endif


                 @if($policy->paragraph10)
                 <p style="font-size: 12px;">{{$policy->paragraph10}}</p>
                
                  @else

                 @endif
                 
               
             </div>

             @else

             @endif

             @if($information)
             <div class="tab_item tab_item_2" style="display: none;">
                 <h3 style="color:#0989e5;">Information Collected</h3>

                 @if($information->paragraph1)
                 <p style="font-size: 12px;">{{$information->paragraph1}}</p>
                
                  @else

                 @endif


                 @if($information->paragraph2)
                 <p style="font-size: 12px;">{{$information->paragraph2}}</p>
                
                  @else

                 @endif


                 @if($information->paragraph3)
                 <p style="font-size: 12px;">{{$information->paragraph3}}</p>
                
                  @else

                 @endif


                 @if($information->paragraph4)
                 <p style="font-size: 12px;">{{$information->paragraph4}}</p>
                
                  @else

                 @endif


                 @if($information->paragraph5)
                 <p style="font-size: 12px;">{{$information->paragraph5}}</p>
                
                  @else

                 @endif


                 @if($information->paragraph6)
                 <p style="font-size: 12px;">{{$information->paragraph6}}</p>
                
                  @else

                 @endif


                 @if($information->paragraph7)
                 <p style="font-size: 12px;">{{$information->paragraph7}}</p>
                
                  @else

                 @endif


                 @if($information->paragraph8)
                 <p style="font-size: 12px;">{{$information->paragraph8}}</p>
                
                  @else

                 @endif


                 @if($information->paragraph9)
                 <p style="font-size: 12px;">{{$information->paragraph9}}</p>
                
                  @else

                 @endif

                 @if($information->paragraph10)
                 <p style="font-size: 12px;">{{$information->paragraph10}}</p>
                
                  @else

                 @endif
               
             </div>

             @else


             @endif


             @if($useOfInformation)
             <div class="tab_item tab_item_3"  style="display: none;">
                 <h3 style="color:#0989e5;">Use of Information</h3>
                  
                    
                 @if($useOfInformation->paragraph1)
                 <p style="font-size: 12px;">{{$useOfInformation->paragraph1}}</p>
                
                  @else

                 @endif

                 @if($useOfInformation->paragraph2)
                 <p style="font-size: 12px;">{{$useOfInformation->paragraph2}}</p>
                
                  @else

                 @endif

                 @if($useOfInformation->paragraph3)
                 <p style="font-size: 12px;">{{$useOfInformation->paragraph3}}</p>
                
                  @else

                 @endif

                 @if($useOfInformation->paragraph4)
                 <p style="font-size: 12px;">{{$useOfInformation->paragraph4}}</p>
                
                  @else

                 @endif


                 @if($useOfInformation->paragraph5)
                 <p style="font-size: 12px;">{{$useOfInformation->paragraph5}}</p>
                
                  @else

                 @endif


                 @if($useOfInformation->paragraph6)
                 <p style="font-size: 12px;">{{$useOfInformation->paragraph6}}</p>
                
                  @else

                 @endif


                 @if($useOfInformation->paragraph7)
                 <p style="font-size: 12px;">{{$useOfInformation->paragraph7}}</p>
                
                  @else

                 @endif


                 @if($useOfInformation->paragraph8)
                 <p style="font-size: 12px;">{{$useOfInformation->paragraph8}}</p>
                
                  @else

                 @endif

                 @if($useOfInformation->paragraph9)
                 <p style="font-size: 12px;">{{$useOfInformation->paragraph9}}</p>
                
                  @else

                 @endif


                 @if($useOfInformation->paragraph10)
                 <p style="font-size: 12px;">{{$useOfInformation->paragraph10}}</p>
                
                  @else

                 @endif

             </div>


             @else


             @endif

             @if($informationPolicy)
             <div class="tab_item tab_item_4"  style="display: none;">
                 <h3 style="color:#0989e5;">Information Protection</h3>
              
                 @if($informationPolicy->paragraph1)
                 <p style="font-size: 12px;">{{$informationPolicy->paragraph1}}</p>
                
                  @else

                 @endif


                 @if($informationPolicy->paragraph2)
                 <p style="font-size: 12px;">{{$informationPolicy->paragraph2}}</p>
                
                  @else

                 @endif


                 @if($informationPolicy->paragraph3)
                 <p style="font-size: 12px;">{{$informationPolicy->paragraph3}}</p>
                
                  @else

                 @endif


                 @if($informationPolicy->paragraph4)
                 <p style="font-size: 12px;">{{$informationPolicy->paragraph4}}</p>
                
                  @else

                 @endif


                 @if($informationPolicy->paragraph5)
                 <p style="font-size: 12px;">{{$informationPolicy->paragraph5}}</p>
                
                  @else

                 @endif

                 @if($informationPolicy->paragraph6)
                 <p style="font-size: 12px;">{{$informationPolicy->paragraph6}}</p>
                
                  @else

                 @endif


                 @if($informationPolicy->paragraph7)
                 <p style="font-size: 12px;">{{$informationPolicy->paragraph7}}</p>
                
                  @else

                 @endif


                 @if($informationPolicy->paragraph8)
                 <p style="font-size: 12px;">{{$informationPolicy->paragraph8}}</p>
                
                  @else

                 @endif


                 @if($informationPolicy->paragraph9)
                 <p style="font-size: 12px;">{{$informationPolicy->paragraph9}}</p>
                
                  @else

                 @endif

                 @if($informationPolicy->paragraph10)
                 <p style="font-size: 12px;">{{$informationPolicy->paragraph10}}</p>
                
                  @else

                 @endif
               
             </div>

             @endif

             @if($informationSharing)
             <div class="tab_item tab_item_5"  style="display: none;">
                 <h3 style="color:#0989e5;" >Information Sharing</h3>
               
                 @if($informationSharing->paragraph1)
                 <p style="font-size: 12px;">{{$informationSharing->paragraph1}}</p>
                
                  @else

                 @endif

                 @if($informationSharing->paragraph2)
                 <p style="font-size: 12px;">{{$informationSharing->paragraph2}}</p>
                
                  @else

                 @endif

                 @if($informationSharing->paragraph3)
                 <p style="font-size: 12px;">{{$informationSharing->paragraph3}}</p>
                
                  @else

                 @endif

                 @if($informationSharing->paragraph4)
                 <p style="font-size: 12px;">{{$informationSharing->paragraph4}}</p>
                
                  @else

                 @endif

                 @if($informationSharing->paragraph5)
                 <p style="font-size: 12px;">{{$informationSharing->paragraph5}}</p>
                
                  @else

                 @endif


                 @if($informationSharing->paragraph6)
                 <p style="font-size: 12px;">{{$informationSharing->paragraph6}}</p>
                
                  @else

                 @endif

                 @if($informationSharing->paragraph7)
                 <p style="font-size: 12px;">{{$informationSharing->paragraph7}}</p>
                
                  @else

                 @endif


                 @if($informationSharing->paragraph8)
                 <p style="font-size: 12px;">{{$informationSharing->paragraph8}}</p>
                
                  @else

                 @endif


                 @if($informationSharing->paragraph9)
                 <p style="font-size: 12px;">{{$informationSharing->paragraph9}}</p>
                
                  @else

                 @endif


                 @if($informationSharing->paragraph10)
                 <p style="font-size: 12px;">{{$informationSharing->paragraph10}}</p>
                
                  @else

                 @endif
   
             </div>

             @endif


             @if($policychildren)
             <div class="tab_item tab_item_6"  style="display: none;">
                 <h3 style="color:#0989e5;" >Policy for Children</h3>
                   
                 @if($policychildren->paragraph1)
                 <p style="font-size: 12px;">{{$policychildren->paragraph1}}</p>
                
                  @else

                 @endif


                 @if($policychildren->paragraph2)
                 <p style="font-size: 12px;">{{$policychildren->paragraph2}}</p>
                
                  @else

                 @endif


                 @if($policychildren->paragraph3)
                 <p style="font-size: 12px;">{{$policychildren->paragraph3}}</p>
                
                  @else

                 @endif


                 @if($policychildren->paragraph4)
                 <p style="font-size: 12px;">{{$policychildren->paragraph4}}</p>
                
                  @else

                 @endif


                 @if($policychildren->paragraph5)
                 <p style="font-size: 12px;">{{$policychildren->paragraph5}}</p>
                
                  @else

                 @endif


                 @if($policychildren->paragraph6)
                 <p style="font-size: 12px;">{{$policychildren->paragraph6}}</p>
                
                  @else

                 @endif


                 @if($policychildren->paragraph7)
                 <p style="font-size: 12px;">{{$policychildren->paragraph7}}</p>
                
                  @else

                 @endif


                 @if($policychildren->paragraph8)
                 <p style="font-size: 12px;">{{$policychildren->paragraph8}}</p>
                
                  @else

                 @endif


                 @if($policychildren->paragraph9)
                 <p style="font-size: 12px;">{{$policychildren->paragraph9}}</p>
                
                  @else

                 @endif


                 @if($policychildren->paragraph10)
                 <p style="font-size: 12px;">{{$policychildren->paragraph10}}</p>
                
                  @else

                 @endif

   
             </div>


             @else


             @endif


             @if($policyupdate)
             <div class="tab_item tab_item_7"  style="display: none;">
                 <h3 style="color:#0989e5;" >Privacy Policy Updates</h3>
               

                 @if($policyupdate->paragraph1)
                 <p style="font-size: 12px;">{{$policyupdate->paragraph1}}</p>
                
                  @else

                 @endif


                 @if($policyupdate->paragraph2)
                 <p style="font-size: 12px;">{{$policyupdate->paragraph2}}</p>
                
                  @else

                 @endif


                 @if($policyupdate->paragraph3)
                 <p style="font-size: 12px;">{{$policyupdate->paragraph3}}</p>
                
                  @else

                 @endif


                 @if($policyupdate->paragraph4)
                 <p style="font-size: 12px;">{{$policyupdate->paragraph4}}</p>
                
                  @else

                 @endif


                 @if($policyupdate->paragraph5)
                 <p style="font-size: 12px;">{{$policyupdate->paragraph5}}</p>
                
                  @else

                 @endif


                 @if($policyupdate->paragraph6)
                 <p style="font-size: 12px;">{{$policyupdate->paragraph6}}</p>
                
                  @else

                 @endif


                 @if($policyupdate->paragraph7)
                 <p style="font-size: 12px;">{{$policyupdate->paragraph7}}</p>
                
                  @else

                 @endif


                 @if($policyupdate->paragraph8)
                 <p style="font-size: 12px;">{{$policyupdate->paragraph8}}</p>
                
                  @else

                 @endif


                 @if($policyupdate->paragraph9)
                 <p style="font-size: 12px;">{{$policyupdate->paragraph9}}</p>
                
                  @else

                 @endif


                 @if($policyupdate->paragraph10)
                 <p style="font-size: 12px;">{{$policyupdate->paragraph10}}</p>
                
                  @else

                 @endif
               
             </div>

             @else


             @endif


            @if($contactpolicy)
             <div class="tab_item tab_item_8"  style="display: none;">
                 <h3 style="color:#0989e5;" >Contact</h3>
                  
                 @if($contactpolicy->paragraph1)
                 <p style="font-size: 12px;">{{$contactpolicy->paragraph1}}</p>
                
                  @else

                 @endif 


                 @if($contactpolicy->paragraph2)
                 <p style="font-size: 12px;">{{$contactpolicy->paragraph2}}</p>
                
                  @else

                 @endif 


                 @if($contactpolicy->paragraph3)
                 <p style="font-size: 12px;">{{$contactpolicy->paragraph3}}</p>
                
                  @else

                 @endif 


                 @if($contactpolicy->paragraph4)
                 <p style="font-size: 12px;">{{$contactpolicy->paragraph4}}</p>
                
                  @else

                 @endif 


                 @if($contactpolicy->paragraph5)
                 <p style="font-size: 12px;">{{$contactpolicy->paragraph5}}</p>
                
                  @else

                 @endif 


                 @if($contactpolicy->paragraph6)
                 <p style="font-size: 12px;">{{$contactpolicy->paragraph6}}</p>
                
                  @else

                 @endif 


                 @if($contactpolicy->paragraph7)
                 <p style="font-size: 12px;">{{$contactpolicy->paragraph7}}</p>
                
                  @else

                 @endif 


                 @if($contactpolicy->paragraph8)
                 <p style="font-size: 12px;">{{$contactpolicy->paragraph8}}</p>
                
                  @else

                 @endif 


                 @if($contactpolicy->paragraph9)
                 <p style="font-size: 12px;">{{$contactpolicy->paragraph9}}</p>
                
                  @else

                 @endif

                 @if($contactpolicy->paragraph10)
                 <p style="font-size: 12px;">{{$contactpolicy->paragraph10}}</p>
                
                  @else

                 @endif 

             </div>

             @else

             @endif
           </div>
           
        </div>
    </div>
 </div>


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

@include('extenders.footer')

@endsection