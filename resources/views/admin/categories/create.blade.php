@extends('layouts.app')

@section('title', 'Add Category - Dimilliy Admin')

@section('content')
<section class="section-padding">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-5 fw-bold text-gradient">Add New Category</h1>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-dark">
                <i class="fas fa-arrow-left me-2"></i>Back to Categories
            </a>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card-custom p-4">
                    <form action="{{ route('admin.categories.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Category Name *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   id="name" name="name" value="{{ old('name') }}" required
                                   placeholder="e.g., Electronics, Clothing">
                            <small class="text-muted">This will be displayed to customers</small>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label fw-semibold">Slug (Optional)</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                                   id="slug" name="slug" value="{{ old('slug') }}"
                                   placeholder="e.g., electronics">
                            <small class="text-muted">Leave empty to auto-generate from name</small>
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary-custom px-5">
                                <i class="fas fa-save me-2"></i>Save Category
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

@section('scripts')
<script>
    // Auto-generate slug from name
    document.getElementById('name').addEventListener('blur', function() {
        const slugField = document.getElementById('slug');
        if (!slugField.value) {
            const name = this.value.toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .trim('-');
            slugField.value = name;
        }
    });
</script>
@endsection
