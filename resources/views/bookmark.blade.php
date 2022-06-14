@extends('layouts.head')
@section('content')
<div class="px-6 py-8 max-h-full h-1/2screen flex items-start justify-center">
  <div class="container flex justify-between mx-auto">
      <div class="w-full lg:w-8/12">
          <div class="flex items-center justify-between">
              <h1 class="text-xl font-bold text-gray-700 ml-16 md:text-2xl">Bookmarked</h1>
          </div>
          @foreach($bookmarks as $bookmark)
          <div class="mt-4 mb-2">
              <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                  <div class="flex items-center justify-between"><span class="font-light text-gray-600">{{ $bookmark->subject->created_at->diffForHumans() }}</span><a href="#"
                      class="px-2 py-1 font-bold text-gray-100 bg-gray-700 rounded hover:bg-gray-600">{{ $bookmark->subject->category->name }}</a>
                    </div>
                    <div class="mt-2"><a href="/subject/{{ $bookmark->subject->slug }}" class="text-2xl font-bold text-gray-700 hover:underline">
                        {{ $bookmark->subject->name }}</a>
                        <p class="mt-2 text-gray-600">{{ $bookmark->subject->excerpt }}</p>
                        </div>
                        <div class="flex items-center justify-between mt-4"><a href="/subject/{{ $bookmark->subject->slug }}"
                            class="text-blue-500 hover:underline">Read more</a>
                            <div><a href="#" class="flex items-center"><img
                                src="https://i.pinimg.com/474x/ec/e2/b0/ece2b0f541d47e4078aef33ffd22777e.jpg"
                                alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                <h1 class="font-bold text-gray-700 hover:underline">{{ $bookmark->subject->teacher->name }}</h1>
                            </a></div>
                        </div>
                    </div>
                </div>
            @endforeach
      </div>
  </div>
</div>
@endsection