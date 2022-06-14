@extends('admin.layouts.main')

@section('container')
<div class="container text-center" style="margin-top:250px">
  <h1 class="fw-bold">Welcome to Admin Dashboard</h1>
  <p>There are currently {{ $user->count() }} students an {{ $teacher->count() }} teachers</p>
</div>
@endsection