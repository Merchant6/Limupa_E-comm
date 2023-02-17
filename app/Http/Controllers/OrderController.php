<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewOrders()
    {
        $latest = Orders::query()->select(['id','order_id','user_id','product_id','quantity','sub_total'])->latest()->limit(25)->get();
        return view('admin.orders.viewOrder',['latest' => $latest]);
    }
}
