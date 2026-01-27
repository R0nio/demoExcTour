<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $users = User::all();

        return view('admin.index', compact('orders', 'users'));
    }
}
