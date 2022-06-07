<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Customer;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   
    public function index()
    {
        return view('home');
    }

    public function topproduct(){
        $data['topproduct']     = Product::join('order_detail','product.id','order_detail.product_id')->select('product_name',DB::raw("SUM(qty) as total"))->groupBy(DB::raw('order_detail.product_id'))->orderBy('total','DESC')->take(10)->get();
        return view('produk.list')->with($data);
    }
    public function topcustomer(){
        $data['topcustomer']    = User::join('orders','users.id','orders.customer_id')->select('first_name','last_name',DB::raw("COUNT(orders.customer_id) as total"))->groupBy(DB::raw('users.id'))->orderBy('total','DESC')->take(10)->get();
        // dd($data);
        return view('customer.list')->with($data);

    }
    public function topagent(){
        $data['topagent']       = Agent::join('orders','agent.id','orders.agent_id')->join('users','users.id','orders.customer_id')->select('store_name','first_name','last_name',DB::raw("COUNT(orders.agent_id) as total"))->groupBy(DB::raw('orders.agent_id'))->orderBy('total','DESC')->take(10)->get();
        // dd($data);
        return view('agent.list')->with($data);
    }
    public function order(Request $request){
        $keyword                    = $request->keyword;
        $data['order']              = Order::join('order_detail','orders.id','order_detail.order_id')->join('agent','agent.id','orders.agent_id')->select('orders.id','orders.name','orders.agent_name','orders.order_time','orders.payment_total','orders.delivery_date')->where('orders.name','LIKE','%'.$keyword.'%')->orWhere('orders.delivery_date','LIKE','%'.$keyword.'%')->paginate(10);
        // dd($data);
        return view('order.list')->with($data);
    }
    public function detailorder($id){
        $data['detailorder']     = DB::table('orders as a')
                                    ->join('order_detail as b','a.id','b.order_id')
                                    ->join('agent as c','c.id','a.agent_id')
                                    ->join('product as d','d.id','b.product_id')
                                    ->select('a.id','a.invoice_id','a.name','a.agent_name','a.payment_date','a.payment_total','a.order_time','a.delivery_date','a.status','b.product_id','d.product_name','b.qty')
                                    ->where('a.id',$id)
                                    ->get()
                                    ->first();
        // dd($data->name);
        return view('order.detail')->with($data);
    }
}
