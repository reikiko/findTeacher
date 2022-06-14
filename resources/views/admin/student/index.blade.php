@extends('admin.layouts.main')

@section('container')
  <div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Categories List</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="/subject"><button type="submit" class="btn btn-sm btn-outline-secondary">
          Go to Home Page
        </button></a>
      </div>
    </div>
  </div>
  @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if(session()->has('deleted'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('deleted') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Email</th>
          <th scope="col">Name</th>
          <th scope="col">Username</th>
          <th scope="col">Address</th>
          <th scope="col">School</th>
          <th scope="col">Phone Number</th>
        </tr>
      </thead>
      <tbody>
        @foreach($students as $student)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $student->email }}</td>
          <td>{{ $student->name }}</td>
          <td>{{ $student->username }}</td>
          <td>{{ $student->address }}</td>
          <td>{{ $student->school }}</td>
          <td>{{ $student->phone_number }}</td>
          <td>
            <a href='/admin/students/{{ $student->username }}/edit ' class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
            <form action='/admin/students/{{ $student->username}}' method='post' class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-danger btn-sm border-0" onclick="return confirm('Confirm Delete')">
                <i class="bi bi-trash-fill"></i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection

