@extends('layouts.head')
@section('content')
<div class="px-6 py-8 max-h-fit flex items-center justify-center">
  <div class="container flex justify-between mx-auto">
      <div class="w-full lg:w-8/12">
          <div class="flex items-center justify-between">
              <h1 class="text-xl font-bold text-gray-700 ml-16 md:text-2xl">Subjects</h1>
          </div>
          @foreach($subjects as $subject)
          <div class="mt-4 mb-2">
              <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                  <div class="flex items-center justify-between"><span class="font-light text-gray-600">{{ $subject->created_at->diffForHumans() }}</span><a href="#"
                      class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">{{ $subject->category->name }}</a>
                    </div>
                    <div class="mt-2"><a href="/subject/{{ $subject->slug }}" class="text-2xl font-bold text-gray-700 hover:underline">
                        {{ $subject->name }}</a>
                        <p class="mt-2 text-gray-600">{{ $subject->excerpt }}</p>
                        </div>
                        <div class="flex items-center justify-between mt-4"><a href="/subject/{{ $subject->slug }}"
                            class="text-blue-500 hover:underline">Read more</a>
                            <div><a href="#" class="flex items-center"><img
                                src="https://i.pinimg.com/474x/ec/e2/b0/ece2b0f541d47e4078aef33ffd22777e.jpg"
                                alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                <h1 class="font-bold text-gray-700 hover:underline">{{ $subject->teacher->name }}</h1>
                            </a></div>
                        </div>
                    </div>
                </div>
            @endforeach
          <div class="mt-8 ml-16">
              {{ $subjects->links() }}
          </div>
      </div>
      <div class="hidden w-4/12 -mx-8 lg:block">
          <div class="px-8">
              <h1 class="mb-4 text-xl font-bold text-gray-700">Teachers</h1>
              <div class="flex flex-col max-w-sm px-6 py-4 mx-auto -ml-1 bg-white rounded-lg shadow-md">
                  <ul class="-mx-4">
                    @foreach($teachers as $teacher)
                      <li class="flex items-center mb-3">
                        <img src="https://i.pinimg.com/474x/ec/e2/b0/ece2b0f541d47e4078aef33ffd22777e.jpg" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                          <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">{{ $teacher->name }}</a><span
                                  class="text-sm font-light text-gray-700">Has {{ $teacher->subject->count() }} subjects</span></p>
                      </li>
                    @endforeach
                  </ul>
              </div>
          </div>
          <div class="px-8 mt-10">
              <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
              <div class="flex flex-col max-w-sm -ml-1 px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
                  <ul>
                    @foreach($categories as $category)
                    <li class="mb-3">
                        <a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">{{ $category->name }}</a>
                    </li>
                    @endforeach
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection