@extends('layouts.head')
@section('content')
<div class="bg-white">
  <div class=" px-10 py-6 mx-auto">  
    <!--author-->
    <div class="max-w-6xl px-10 py-6 mx-auto">   
      <a href="" class="block transition duration-200 ease-out transform hover:scale-90">
        <img class="object-cover w-full h-96 shadow-sm" src="{{ asset('/storage/'. $subject->image ) }}">
      </a>
      <!--post categories-->
      <div class="flex items-center justify-start mt-4 mb-4">
        <a href="#"class="px-3 py-1 font-bold bg-gray-800 text-white rounded-full hover:bg-gray-500 mr-4">{{ $subject->category->name }}</a>
      </div>
    <div class="mt-2">
      <!--post heading-->
      <a href="#" class="sm:text-3xl md:text-3xl lg:text-3xl xl:text-4xl font-bold text-gray-800  hover:underline">{{ $subject->name }}</a>
        <!--author avatar-->
        <div class="font-light text-gray-600">
          <a href="#" class="flex items-center mt-6 mb-6">
            <img src="{{ asset('/storage/'. $subject->teacher->avatar ) }}" alt="avatar" class="hidden object-cover w-14 h-14 mx-4 rounded-full sm:block">
              <h1 class="font-bold text-gray-700 hover:underline">By {{ $subject->teacher->name }}</h1>
          </a>
        </div>
    </div>
      <!--end post header-->
      <!--post content-->
      <div class="max-w-4xl px-10 py-5 mx-auto text-2xl text-gray-800 rounded bg-gray-100">
        <!--content body-->
        <p class="p-2">{!! $subject->desc !!}</p>
      </div>
    </div>
    <!--bookmark button-->
    @auth
    <div class="p-6 bg-white">
      <div class="p-6 max-w-4xl bg-gradient-to-tr from-[#E67E22] to-[#FC6011] rounded-lg border border-gray-200 shadow-md mx-auto my-10">
        <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
            Do you like this subject?
          </h5>
        </a>
        <p class="mb-3 font-normal text-gray-200">
          Add to your bookmark to see it when ever you want!
        </p>
        <form action="/bookmark" method="post">
          @csrf
          <button class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-800 bg-white rounded-lg hover:bg-gray-700 hover:text-white hover:shadow-lg"
                  type="submit"
                  id="subject_id" name="subject_id"
                  value={{ $subject->id }}
                  onclick="return confirm('Added to your bookmark!')">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill mr-2" viewBox="0 0 16 16">
              <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
            </svg>
            Bookmark
          </button>
        </form>
      </div>  
    </div>
    @else
    <div class="p-6 bg-white">
      <div class="p-6 max-w-4xl bg-gradient-to-tr from-[#E67E22] to-[#FC6011] rounded-lg border border-gray-200 shadow-md mx-auto my-10">
        <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
            Do you like this subject?
          </h5>
        </a>
        <p class="mb-3 font-normal text-gray-200">
          Register to add this subject to your Bookmark or hit the Sign In button if you already have
          an account.
        </p>
        <a href="/registerstudent" class="inline-flex items-center py-2 px-3 text-sm font-medium 
          text-center text-gray-800 bg-white rounded-lg hover:bg-gray-700 hover:text-white hover:shadow-lg">
          Sign Up Now
          <svg
            class="ml-2 -mr-1 w-4 h-4"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </a>
      </div>  
    </div>
    @endauth
  </div>
</div>
@endsection