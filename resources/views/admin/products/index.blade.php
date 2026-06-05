@extends('layouts.app')

@section('title', 'Manage Products - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-5 fw-bold text-gradient">Products</h1>
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary-custom">
                <i class="fas fa-plus me-2"></i>Add Product
            </a>
        </div>
        
        <!-- Filters -->
        <div class="card-custom p-4 mb-4">
            <div class="row g-3 align-items-end">
                <div class="col-lg-4">
                    <label class="form-label fw-semibold">Search</label>
                    <form action="{{ route('admin.products.index') }}" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" 
                                   placeholder="Search products..." value="{{ request('search') }}">
                            <button type="submit" class="btn btn-primary-custom">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <label class="form-label fw-semibold">Category</label>
                    <form action="{{ route('admin.products.index') }}" method="GET" id="categoryForm">
                        <select name="category" class="form-select" onchange="this.form.submit()">
                            <option value="">All Categories</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @if(request('search'))
                            <input type="hidden" name="search" value="{{ request('search') }}">
                        @endif
                    </form>
                </div>
                <div class="col-lg-5 text-lg-end">
                    @if(request('search') || request('category'))
                        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-times me-1"></i>Clear Filters
                        </a>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Products Table -->
        <div class="card-custom p-4">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="bg-light">
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" 
                                     class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                            </td>
                            <td>
                                <strong>{{ $product->name }}</strong>
                            </td>
                            <td>
                                @if($product->category_id)
                                    <span class="badge bg-info">{{ $product->category->name }}</span>
                                @else
                                    <span class="badge bg-secondary">Uncategorized</span>
                                @endif
                            </td>
                            <td style="color: var(--primary-pink);">{{ number_format($product->price, 0, ',', ' ') }} UZS</td>
                            <td>{{ $product->stock_quantity }}</td>
                            <td>
                                @if($product->is_top)
                                    <span class="badge bg-danger me-1">Top</span>
                                @endif
                                @if($product->is_special)
                                    <span class="badge bg-warning">Special</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a href="{{ route('admin.products.edit', $product) }}" 
                                       class="btn btn-sm btn-outline-primary" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.products.destroy', $product) }}" 
                                          method="POST" class="d-inline"
                                          onsubmit="return confirm('Are you sure you want to delete this product?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="mt-4">
                {{ $products->withQueryString()->links() }}
            </div>
        </div>
    </div>
</section>
@endsection
