<?php

namespace App\Http\Controllers\Order;

use App\Models\Orders;
use App\Models\PreOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $data = PreOrder::where('user_id', auth()->user()->id)->with('venue')->get()->first();
        
        return view('detail-pesanan', compact('data'));
    }

    public function order($id){
        $data = PreOrder::where('id', $id)->with('venue')->get()->first();
        
        $order = [
            'order_id' => 'ORD-' . time(),
            'payment_date' => date('Y-m-d'),
            'date' => $data->date,
            'time' => $data->time,
            'price' => $data->venue->price,
            'venue_id' => $data->venue_id,
            'user_id' => $data->user_id,
        ];
        
        $order = Orders::create($order);
        $data->delete();

        return redirect()->route('invoice', $order->order_id);
    }

    public function invoice($id){
        $data = Orders::where('order_id', $id)->with('venue', 'user')->get()->first();
        return view('invoice', compact('data'));
    }
}
