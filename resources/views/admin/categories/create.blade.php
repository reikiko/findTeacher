@extends('admin.layouts.main')

@section('container')
  <div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Category Form</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="/subject"><button type="submit" class="btn btn-sm btn-outline-secondary">
          Go to Home Page
        </button></a>
      </div>
    </div>
  </div>
  <div class="col-lg-7">
    <form class="mb-5" action="/admin/categories " method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Category Name</label>
        <input type="text" placeholder="Category Name" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
        value="{{ old('name', $categories->name) }}">
        @error('name')
          <div class="invalid-feedback">{{ $subject }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" placeholder="category-slug" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
        value="{{ old('slug', $categories->slug) }}">
        @error('slug')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection
