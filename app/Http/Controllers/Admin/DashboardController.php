<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $topProducts = Product::where('is_top', true)->count();
        $specialProducts = Product::where('is_special', true)->count();
        $totalOrders = Order::count();
        $totalUsers = User::where('is_admin', false)->count();
        $recentOrders = Order::with('user')->latest()->take(5)->get();
        $totalCategories = Category::count();

        return view('admin.dashboard', compact(
            'totalProducts',
            'topProducts',
            'specialProducts',
            'totalOrders',
            'totalUsers',
            'recentOrders',
            'totalCategories'
        ));
    }
}
