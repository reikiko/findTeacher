@extends('layouts.head')
@section('content')
<div class="flex items-center justify-center px-6 py-8">
  <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Teachers</h1>
</div>
<div class="mb-48 flex flex-cols justify-center gap-4">
  @foreach($teachers as $teacher)
  <div class="flex flex-col items-center w-80 justify-center bg-white p-4 shadow rounded-lg">
    <div class="inline-flex shadow-lg border border-gray-200 rounded-full overflow-hidden h-40 w-40">
      <img src="{{ asset('/storage/'. $teacher->avatar ) }}"
         alt="avatar"
         class="h-full w-full">
    </div>
    <a href="#" class="mt-4 font-bold text-xl hover:underline">{{ $teacher->name }}</a>
    <h6 class="text-xs text-gray-500 font-medium">{{ $teacher->phone_number }}</h6>
    <p class="text-sm text-gray-500 text-center mt-3">
      This is bio.
    </p>
  </div>
  @endforeach
</div>
@endsection