<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(Request $request)
    {
        $validate = $request->validate([
            'tour' => 'exists:tours,id'
        ]);
        if ($validate) {
            $orders = Order::where('tour_id', $request->tour)->get();
        } else {
            $orders = Order::all();
        }
        $tours = Tour::all();

        return view('admin.index', compact('orders', 'tours'));
    }
}
