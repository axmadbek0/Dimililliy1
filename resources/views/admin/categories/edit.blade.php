@extends('layouts.app')

@section('title', 'Edit Category - Dimilliy Admin')

@section('content')
<section class="section-padding">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-5 fw-bold text-gradient">Edit Category</h1>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-dark">
                <i class="fas fa-arrow-left me-2"></i>Back to Categories
            </a>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card-custom p-4">
                    <form action="{{ route('admin.categories.update', $category) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Category Name *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   id="name" name="name" value="{{ old('name', $category->name) }}" required
                                   placeholder="e.g., Electronics, Clothing">
                            <small class="text-muted">This will be displayed to customers</small>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label fw-semibold">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                                   id="slug" name="slug" value="{{ old('slug', $category->slug) }}"
                                   placeholder="e.g., electronics">
                            <small class="text-muted">Used in URLs. Be careful when changing!</small>
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="alert alert-info mb-3">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Products in this category:</strong> {{ $category->products()->count() }}
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary-custom px-5">
                                <i class="fas fa-save me-2"></i>Update Category
                            </button>
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
