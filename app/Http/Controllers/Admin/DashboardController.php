<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\OrderItems;
use App\Models\Orders;
use App\Models\Product;
use App\Models\Products1;
use App\Models\Rating;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index(){
        if(!Gate::allows('admin')){
            abort(403);
    }

      $totalProducts = Product::count();
      $totalCategories = Category::count();
      $totalBrands = Brand::count();
      $outOfStockProducts = Product::where('quantity','0')->count();

      $totalAllUsers = User::count();
      $totalUser = User::where('is_admin','0')->count();
      $totalAdmin = User::where('is_admin','1')->count();

      $totalOrder = Orders::count();

      $now = Carbon::now()->format('Y-m-d');
      $todayOrder = Orders::whereDate('created_at',$now)->count();

      $month = Carbon::now()->format('m');
      $thisMonthOrder = Orders::whereMonth('created_at',$month)->count();

      $year = Carbon::now()->format('Y');
      $thisYearOrder = Orders::whereYear('created_at',$year)->count();



      //Year icome
      $dataOrdersItems = OrderItems::select('id','price','quantity','created_at')->orderBy('created_at')->get()->groupBy(function($dataOrdersItems){
                return Carbon::parse($dataOrdersItems->created_at)->format('M');
      });

     

        
      $months = [];
      $totalPrice = [];

      $categoryName = [];
      $totalProductsCount = 0;
      
      foreach($dataOrdersItems as $data=>$items){

        $months[]=$data;
       
        $totalPrice[]=$items->sum(function($item){
          return $item->price*$item->quantity;
        });


        foreach($items as $item){

          if ($item->product) {
            // Verifică dacă produsul are o relație validă cu o categorie
            if ($item->product->category) {
                // Accesează categoria produsului asociat fiecărui element OrderItems
                $categoryName[] = $item->product->category->name;
                // Incrementarea numărului total de produse pentru această lună
                $totalProductsCount += count($item->product->category->products);
               
               
            }
        }
        }

      }

     
      
      

      $products = Product::where('status', '0')->get();

      $ratingSum = [];

      foreach ($products as $product) {

          $totalRating = 0;

          $ratings = Rating::where('prod_id', $product->id)->get();

          foreach ($ratings as $rating) {

              $totalRating += $rating->stars_rated;

          }

          $ratingSum[$product->name] = $totalRating;
      }


      arsort($ratingSum);
      
      
      $topProducts = array_slice($ratingSum, 0, 7, true); 

      $sortedProducts = [];
foreach ($topProducts as $productName => $totalRating) {
    $product = $products->where('name', $productName)->first();
    $product->total_stars = $totalRating; // Adaugă numărul total de stele la obiectul produsului
    $sortedProducts[] = $product;
}
      
      
      foreach ($sortedProducts as $product) {
    $labels[] = $product->name;
    // Aici trebuie să găsești numărul total de stele adunate pentru produsul curent
    // Eu voi presupune că numărul total de stele adunate este stocat într-un anumit câmp din modelul produsului, să zicem 'total_stars'
    $values[] = $product->total_stars;
}
   
     
  
  
   
     //Category Board


     

     $categories = Category::where('status', '0')->take(7)->get();

$ratingSum2 = [];

foreach ($categories as $category) {
    $totalRating2 = 0;

    // Obține toate produsele din categoria curentă
    $products1 = Product::where('category_id', $category->id)->where('status','0')->get();

    // Calculează suma totală a stelelor pentru toate produsele din categoria curentă
    foreach ($products1 as $product) {
        $ratings2 = Rating::where('prod_id', $product->id)->get();
        foreach ($ratings2 as $rating) {
            $totalRating2 += $rating->stars_rated;
        }
    }

    // Adaugă suma totală a stelelor pentru categoria curentă în array
    $ratingSum2[$category->name] = $totalRating2;
}


     


      
      //Satisfied persons
      $ratings = Rating::all();
      $total_ratings = $ratings->count();
  
      $satisfacuti_count = $ratings->where('stars_rated', '>=', 3)->count();
      $nesatisfacuti_count = $ratings->where('stars_rated', '<', 3)->count();
  
      $procent_satisfacuti = ($satisfacuti_count / $total_ratings) * 100;
      $procent_nesatisfacuti = ($nesatisfacuti_count / $total_ratings) * 100;
  

       


      
      $orders = Orders::all()->take(20);

      



      $TaskCount = Task::all()->count();


    return view('admin.menu',compact('totalProducts','totalCategories','totalBrands','totalAllUsers','totalUser','totalAdmin','totalOrder','todayOrder','thisMonthOrder','thisYearOrder','outOfStockProducts','months','totalPrice','orders','procent_satisfacuti','procent_nesatisfacuti','labels','values','ratingSum2','TaskCount'));
    }


    public function outOfStock(){

      if(!Gate::allows('admin')){
        abort(403);
      }

      $outOfStock = Product::where('quantity','0')->get();

      $TaskCount = Task::all()->count();

      return view('admin.out-of-stock',compact('outOfStock','TaskCount'));
    }
}
