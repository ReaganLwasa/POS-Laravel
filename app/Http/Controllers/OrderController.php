<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $orders = Order::all();
        return view('orders.index', ['products' => $products, 'orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->all();

        DB::transaction(function () use ($request){

          // Order Modal
            $orders = new Order;
            $orders->name = $request->customer_name;
            $orders->phone = $request->customer_phone;
            $orders->save();
            $order_id = $orders->id;

            //['order_id', 'product_id', 'unitprice', 'quantity', 'amount', 'discount'];

          // Order Details Modal

          for ($product_id =0; $product_id < count($request->product_id); $product_id++) {
            $order_details = new Order_Detail;
            $order_details->order_id = $order_id;
            $order_details->product_id = $request -> product_id[$product_id];
            $order_details->unitprice = $request -> unitprice[$product_id];
            $order_details->quantity = $request -> quantity[$product_id];
            $order_details->discount = $request -> discount[$product_id];
            $order_details->amount = $request -> amount[$product_id];
            $order_details->save();
          }
            

          //Transaction Madal
            $Transaction = new Transaction();
            $Transaction->order_id = $order_id;
            $Transaction->product_id = auth()->user()->id;
            $Transaction->balance = $request -> balance;
            $Transaction->paid_amount = $request -> paid_amount;
            $Transaction->payment_method = $request -> payment_method;
            $Transaction->amount = $request -> amount;


        });

       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}