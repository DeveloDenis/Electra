<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\InvoiceOrderMailable;
use App\Models\Orders;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Gate;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use Termwind\Components\Raw;

class OrdersController extends Controller
{



    public function  filter(Request $request){

        if(!Gate::allows('admin')){
            abort(403);
        }

      $date = $request->date;
      $status = $request->status;

      $orders =  Orders::whereDate('created_at',$date)->where('status_message',$status)->paginate(10);


      $TaskCount = Task::all()->count();

      return view('admin.view-orders',compact('orders','TaskCount'));
    }
    

    public function viewTotal(Request $request){

       if(!Gate::allows('admin')){
        abort(403);
       }

        
         


         

          $orders = Orders::orderBy('created_at','DESC');


          $TaskCount = Task::all()->count();

        return view('admin.view-orders',[
            'orders'=>$orders->paginate(10),
            'TaskCount'=>$TaskCount,
        ]);
    }


    public function viewToday(Request $request){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $now = Carbon::now()->format('Y-m-d');

        $orders = Orders::whereDate('created_at',$now)->paginate(10);

        $TaskCount = Task::all()->count();

        return view('admin.view-orders',compact('orders','TaskCount'));
    }


    public function viewMonth(){


        if(!Gate::allows('admin')){
            abort(403);
        }

        $month = Carbon::now()->format('m');

        $orders = Orders::whereMonth('created_at',$month)->paginate(10);

        $TaskCount = Task::all()->count();

        return view('admin.view-orders',compact('orders','TaskCount'));

    }


   public function viewYear(){

    if(!Gate::allows('admin')){
        abort(403);
    }

    $year = Carbon::now()->format('Y');

    $orders = Orders::whereYear('created_at',$year)->paginate(10);

    $TaskCount = Task::all()->count();

    return view('admin.view-orders',compact('orders','TaskCount'));
   }

    public function show($orderId){

        if(!Gate::allows('admin')){
            abort(403);
        }


        $order = Orders::where('id',$orderId)->first();

        $TaskCount = Task::all()->count();

        if($order){



            return view('admin.view-order', compact('order','TaskCount'));
        }else{

            return redirect()->route('admin.orders.view')->with('message','No order found');
        }


        
    }


    public function update( int $orderId, Request $request){

        if(!Gate::allows('admin')){
            abort(403);
        }
 
        $validated = $request->validate([
           'order_status'=>'required',
        ]);


        $order = Orders::where('id',$orderId)->firstOrFail();

       

        if($order){

$order->update([
            'status_message'=>$validated['order_status'],
        ]);

        return redirect()->route('admin.orders.view')->with('success','The order status was updated successfully!');

        } else{


            return redirect()->back()->with('error','Order not found');
        }
         
       
        

    }


    public function viewInvoice(int $orderId){

        if(!Gate::allows('admin')){
            abort(403);
        }



        $order = Orders::findOrFail($orderId);

        $TaskCount = Task::all()->count();

        return view('invoice',compact('order','TaskCount'));


    }


    public function generateInvoice(int $orderId){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $order = Orders::findOrFail($orderId);
        $data = ['order' => $order];

        $pdf = Pdf::loadView('invoice', $data);

        $todayDate = Carbon::now()->format('d-m-Y');
        return $pdf->download('invoice-'.$order->id.'-'.$todayDate.'.pdf');
    }

    public function orderMail(int $orderId){

        if(!Gate::allows('admin')){
            abort(403);
        }

        

        try{
            $order = Orders::findOrFail($orderId);
            Mail::to("$order->email")->send(new InvoiceOrderMailable($order));
            return redirect()->back()->with('success','Invoice Mail has been sent to '.$order->email);
        }catch(\Exception $e){
            return redirect()->back()->with('error','Something went wrong!');
        }
       


       

    }
}
