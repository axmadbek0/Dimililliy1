<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->filled('category')) {
            $query->byCategory($request->category);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $products = $query->latest()->paginate(12);
        $categories = Product::CATEGORIES;

        return view('products.index', compact('products', 'categories'));
    }

    public function show(Product $product)
    {
        $relatedProducts = Product::byCategory($product->category)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('products.show', compact('product', 'relatedProducts'));
    }

    public function special()
    {
        $products = Product::where('is_special', true)->latest()->paginate(12);
        return view('products.special', compact('products'));
    }

    public function top()
    {
        $products = Product::where('is_top', true)->latest()->paginate(12);
        return view('products.top', compact('products'));
    }
}
