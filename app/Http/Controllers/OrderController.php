<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {}

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request, Order $order)
    {
        $request->validate([
            'count' => ['required', 'min:1', 'integer']
        ]);
        $order->create([
            'count' => $request->count
        ]);
        return redirect()->route('welcome');
    }
}
