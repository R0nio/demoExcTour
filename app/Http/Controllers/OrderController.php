<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('dashboard', compact('orders'));
    }

    public function create(Tour $tour)
    {
        return view('orders.create', compact('tour'));
    }

    public function store(Request $request, Order $order)
    {

        $request->validate([
            'count' => ['required', 'min:1', 'integer']
        ]);
        $order->create([
            'count' => $request->count,
            'user_id' => Auth::user()->id,
            'tour_id' => $request->tour_id,
        ]);
        return redirect()->route('welcome');
    }
}
