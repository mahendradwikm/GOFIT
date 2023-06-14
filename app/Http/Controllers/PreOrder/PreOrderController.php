<?php

namespace App\Http\Controllers\PreOrder;

use App\Models\PreOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PreOrderController extends Controller
{
    public function pre_order(Request $request){
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;

        $pre_order = PreOrder::create($data);

        return redirect()->route('detail-order')->with('success', 'Pre Order Berhasil');
    }
}
