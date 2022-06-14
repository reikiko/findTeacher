@extends('admin.layouts.main')

@section('container')
  <div class="col-lg-7  p-3 py-md-5">
    <main>
      <h1>{{ $subject->name }}</h1>
      <span class="text-muted">Category : {{ $subject->category->name }}, By {{ $subject->teacher->name }}</span>
      <div style="max-height:350px; overflow:hidden; " class="my-3">
        @if($subject->image)
          <img src="{{ asset('/storage/'. $subject->image ) }}" 
          class="img-fluid " alt="{{ $subject->name }}">
        @else
          <img src="https://images.pexels.com/photos/301920/pexels-photo-301920.jpeg?cs=srgb&dl=pexels-pixabay-301920.jpg&fm=jpg" 
          class="img-fluid " alt="img">
        @endif
      </div> 
      <p class="fs-5 col-md-8 my-4 fs-6">{!! $subject->desc !!}</p>
      <a href="/dashboard/subjects" class="link-dark"> Back to Page</a>
    </main>
  </div>
@endsection