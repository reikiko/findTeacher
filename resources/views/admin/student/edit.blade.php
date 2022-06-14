@extends('admin.layouts.main')

@section('container')
  <div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Student Form</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="/"><button type="submit" class="btn btn-sm btn-outline-secondary">
          Go to Home Page
        </button></a>
      </div>
    </div>
  </div>
  <div class="col-lg-7">
    <form action="/admin/students/{{ $student->username }}" method="post" enctype="multipart/form-data">
      @method('put')
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
        value="{{ old('name', $student->name) }}">
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username"
        value="{{ old('username', $student->username) }}">
        @error('username')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
        value="{{ old('email', $student->email) }}">
        @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
        value="{{ old('address', $student->address) }}">
        @error('address')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="school" class="form-label">School</label>
        <input type="text" class="form-control @error('school') is-invalid @enderror" id="school" name="school"
        value="{{ old('school', $student->school) }}">
        @error('school')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="phone_number" class="form-label">Phone Number</label>
        <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number"
        value="{{ old('phone_number', $student->phone_number) }}">
        @error('phone_number')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  </script>
@endsection
