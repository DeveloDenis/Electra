@extends('extenders.layout')


@section('title','Admin Home Page')


@section('style')

<style>

.wrapper{
  height:540px;
  border: 1px solid #ddd;
  display:flex;
  overflow-x:auto;
}



.wrapper .card{
  min-width: 18rem;
  height:510px;
  margin-right:5px;

}


#myChartContainer {
        display: flex;
        justify-content: center;
        align-items: center;
        
    }

    .container1{
      margin-top:100px;
    }
</style>
@endsection



@section('content')
@include('extenders.navbar-admin')



<main class="mt-5  pt-3">

  <div class="container-fluid container1">
   
    @if(session()->has('success'))
                        
                    <div class="alert alert-success alert-dismissible fade show">
                      {{session('success')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>


                    @endif

           <div class="row">
            <div class="col-md-12">
              <h1>Your analytics dashboard template:</h1>
              <hr>
            </div>
           </div>


        <div class="row">


          <div class="col-md-3">
            <div class="card card-body bg-primary text-white mb-3">
                  <label >Total Orders</label>

                  <h1>{{$totalOrder}}</h1>

                  <a href="{{route('admin.orders.view')}}" class="text-white">view</a>
                  
            </div>
          </div>


          <div class="col-md-3">
            <div class="card card-body bg-success text-white mb-3">
                  <label >Today Orders</label>

                  <h1>{{$todayOrder}}</h1>

                  <a href="{{route('admin.orders.today.view')}}" class="text-white">view</a>
                  
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-warning text-white mb-3">
                  <label >This Month Orders</label>

                  <h1>{{$thisMonthOrder}}</h1>

                  <a href="{{route('admin.orders.month.view')}}" class="text-white">view</a>
                  
            </div>
          </div>


          <div class="col-md-3">
            <div class="card card-body bg-danger text-white mb-3">
                  <label >Year Orders</label>

                  <h1>{{$thisYearOrder}}</h1>

                  <a href="{{route('admin.orders.year.view')}}" class="text-white">view</a>
                  
            </div>
          </div>


          
        </div>

        <hr>

        <div class="row">

          <div class="col-md-3">
            <div class="card card-body bg-primary text-white mb-3">
              <label>Total Products</label>
              <h1>{{$totalProducts}}</h1>
              <a href="{{route('view.products')}}" class="text-white">View</a>
            </div>
          </div>


          <div class="col-md-3">
            <div class="card card-body bg-danger text-white mb-3">
              <label>Out Of Stock Products</label>
              <h1>{{$outOfStockProducts}}</h1>
              <a href="{{route('outOfStock')}}" class="text-white">View</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-success text-white mb-3">
              <label>Total Categories</label>
              <h1>{{$totalCategories}}</h1>
              <a href="{{route('admin.category')}}" class="text-white">View</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-warning text-white mb-3">
              <label>Total Brands</label>
              <h1>{{$totalBrands}}</h1>
              <a href="{{route('admin.brands')}}" class="text-white">View</a>
            </div>
          </div>


        </div>

        <hr>

        <div class="row">

          <div class="col-md-3">
            <div class="card card-body bg-primary text-white mb-3">
              <label>All Users</label>
              <h1>{{$totalAllUsers}}</h1>
              <a href="{{route('users.informations')}}" class="text-white">View</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-success text-white mb-3">
              <label>Total Users</label>
              <h1>{{$totalUser}}</h1>
              <a href="{{route('user.informations')}}" class="text-white">View</a>
            </div>
          </div>


          <div class="col-md-3">
            <div class="card card-body bg-primary text-white mb-3">
              <label>All Admins</label>
              <h1>{{$totalAdmin}}</h1>
              <a href="{{route('admin.informations')}}" class="text-white">View</a>
            </div>
          </div>


        </div>

        <hr>
           
      <div class="row my-3">

       <div class="col-md-6">
         <div class="card">
           <div class="card-header">
            Total revenue this year
           </div>
           <div class="card-body">
             <canvas class="chart" id="chart1" width="400" height="200"></canvas>
           </div>
         </div>
       </div>

       <div class="col-md-6">
         <div class="card" >
           <div class="card-header">
            Satisfied people
           </div>
           <div class="card-body">
             <canvas class="chart" id="chart2" width="400" height="300"></canvas>
           </div>
         </div>
       </div>
      


      <div class="col-md-6 mb-3 mt-3">
        <div class="card" >
          <div class="card-header">
           Most Apreciated Products
          </div>
          <div class="card-body">
            <canvas class="chart" id="chart3" width="400" height="300"></canvas>
          </div>
        </div>
      </div>


      
      <div class="col-md-6 mb-3 mt-3">
        <div class="card" >
          <div class="card-header">
           Most Apreciated Product Categories
          </div>
          <div class="card-body" id="myChartContainer">
            <canvas class="chart" id="chart4" width="400" height="300"></canvas>
          </div>
        </div>
      </div>

      

     </div>


    

      <div class="row">
       <div class="col-md-12">
         <div class="card">
           <div class="card-header">
             Orders
             <div class="float-end ">
              <a class="btn btn-primary btn-sm" href="{{route('admin.orders.view')}}">View all</a>
             </div>
           </div>
           <div class="card-body">
             <div class="table-responsive">
               <table
             id="example"
             class="table table-striped data-table"
             style="width: 100%"
           >
             <thead>
               <tr>
                 <th>Order Id</th>
                 <th>Tracking No</th>
                 <th>User ID</th>
                 <th>Username</th>
                 <th>Payment Mode</th>
                 <th>Order Date</th>
                 <th>Status Message</th>
                 <th>Action</th>
               </tr>
             </thead>
             <tbody>
               @forelse($orders as $order)
                 <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->tracking_no}}</td>
                <td>{{$order->user_id}}</td>
                <td>{{$order->fullname}}</td>
                <td>{{$order->payment_mode}}</td>
                <td>{{$order->created_at}}</td>
                <td>{{$order->status_message}}</td>
                <td>
                  <a class="btn btn-primary btn-sm" href="{{route('admin.orders.show',$order->id)}}">View</a>
                </td>
              </tr>
               @empty

               <td colspan="7">No order available</td>

               @endforelse
             </tbody>

           </table>
             </div>
           </div>
         </div>
       </div>
      </div>
         
  </div>
</main>




@include('extenders.footer')


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<script>


        
        

        var chartData2 = @json($ratingSum2);
        var  cateoryName = Object.keys(chartData2);
        var ratings2 = Object.values(chartData2);



const chart1 = document.getElementById('chart1');
const chart2 = document.getElementById('chart2');
const chart3 = document.getElementById('chart3');
const chart4 = document.getElementById('chart4');

var chart11 = new Chart(chart1,{

  type:'line',

  data:{

    labels: {!!json_encode($months)!!},

    datasets:[
         {
          label:'$',
          data: {!!json_encode($totalPrice)!!},
          backgroundColor: 'rgb(15, 46, 246)',
          borderColor:'rgb(15, 46, 246)',
         }
    ],

    
  },

  

  
});

var chart22 = new Chart(chart2, {

  type:'pie',

  data: {
        labels: ['Satisfied people', 'Dissatisfied people'],
        datasets: [{
            label: '%',
            data: [{{$procent_satisfacuti}}, {{$procent_nesatisfacuti}}],
            backgroundColor: ['#F2FA01', '#4F4F49']
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
})

var chart33 = new Chart(chart3, {

   type:'bar',

    data: { 
      labels: <?php echo json_encode($labels); ?>,
      datasets: [{
          label: 'Total Number of stars',
          data: <?php echo json_encode($values); ?>,
          backgroundColor: 'rgb(15, 46, 246)',
      }]
  },
  options: {
      responsive: true,
      maintainAspectRatio: false
  }
})



var chart44 = new Chart(chart4, {

  type:'bar',


  data:{

    labels: cateoryName,

    datasets:[{
           label: 'Total Number of Stars',
           data: ratings2,
           backgroundColor: ['#EA240D','#0DEAD6','#0D17EA','#CF0DEA','#EAC20D','#D9EA0D','#9F2073','#0E6F0D','#0D6F69','#260D6F','#6F1A0D','#6EC779','#BBC76E','#C76F6E','#6E88C7'],
           
    }],
  },


  options: {
        responsive: false, 
        maintainAspectRatio: false, 
        width: 500,
        height: 400,

        legend: {
            display: false 
        },
        
    },


    

  
})




</script>



@endsection
