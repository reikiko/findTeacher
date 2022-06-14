@extends('admin.layouts.main')

@section('container')
  <div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Subject Form</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="/subject"><button type="submit" class="btn btn-sm btn-outline-secondary">
          Go to Home Page
        </button></a>
      </div>
    </div>
  </div>
  <div class="col-lg-7">
    <form class="mb-5" action="/dashboard/subjects " method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Subject Name</label>
        <input type="text" placeholder="Subject Name" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
        value="{{ old('name', $subject->name) }}">
        @error('name')
          <div class="invalid-feedback">{{ $subject }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" placeholder="subject-slug" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
        value="{{ old('slug', $subject->name) }}">
        @error('slug')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select class="form-select" id="category_id" name="category_id">
          @foreach($categories as $category)
            @if(old('category_id', $subject->categeory_id ) ==  $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <img class="img-preview img-fluid mb-3 col-sm-5">
        <input class="form-control @error('image') is-invalid @enderror" type="file" 
        id="image" name="image" onchange="previewImage()">
        @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="desc" class="form-label">Description</label>
        @error('desc')
          <p class="text-danger text-sm">{{ $message }}</p>
        @enderror
        <input id="desc" type="hidden" placeholder="Subject Description" name="desc" value="{{ old('desc', $subject->desc) }}"">
        <trix-editor input="desc"></trix-editor>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script>
    document.eventListener('trix-file-accept',function(e){
      e.preventDefault();
    })

    function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader. onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }
    }
  </script>
@endsection
