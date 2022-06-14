@extends('layouts.head')
@section('content')
<!-- Hero Section Start-->
<div class="max-h-fit bg-[#FDF2E9]">
  <div class="container mx-auto pt-10 pb-10 bg-[#FDF2E9]">
    <div class="flex justify-between ml-10">
      <div class="w-1/2 content-start">
        <p class="text-sm text-gray-800">Best way to learn from anywhere</p>
        <h1 class="text-5xl font-bold my-10">
          Find the best Teacher for your favorite subject.
        </h1>
        <p class="text-sm text-gray-500 my-10">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
          incidunt atque aliquid quidem natus consequatur explicabo maiores
          eaque, est optio aliquam officia consectetur aperiam inventore
          pariatur sint dolores tempora quibusdam.
        </p>
        <div class="flex justify-start">
          <button
            action="/loginstudent"
            method="get"
            class="px-5 py-2.5 mr-4 mb-2 text-white font-medium rounded-full text-sm bg-orange-600 hover:bg-gray-800 hover:shadow-lg"
          >
            Start Learning
          </button>
          <button
            href="#"
            class="px-5 py-2.5 mb-2 text-gray-800 bg-white font-medium rounded-full text-sm hover:bg-gray-800 hover:text-white hover:shadow-lg"
          >
            Learn More
          </button>
        </div>
        <div class="flex flex-row items-center">
          <div class="flex -space-x-4 my-10">
            <img
              class="w-10 h-10 border-2 border-white rounded-full"
              src="/img/teachers/customer-1.jpg"
              alt=""
            />
            <img
              class="w-10 h-10 border-2 border-white rounded-full"
              src="/img/teachers/customer-2.jpg"
              alt=""
            />
            <img
              class="w-10 h-10 border-2 border-white rounded-full"
              src="/img/teachers/customer-3.jpg"
              alt=""
            />
            <img
              class="w-10 h-10 border-2 border-white rounded-full"
              src="/img/teachers/customer-4.jpg"
              alt=""
            />
            <a
              class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-orange-600 border-2 border-white rounded-full hover:bg-gray-800 dark:border-gray-800"
              href="#"
              >+99</a
            >
          </div>
          <h1 class="mx-4 font-bold">Certified Teachers!</h1>
        </div>
      </div>
      <img src="/img/hero.png" class="max-w-md" />
    </div>
  </div>
  <!-- Hero Section End -->
  </div>
  <!-- Featured Section Start -->
  <div class="flex flex-col justify-center items-center py-10 content-center bg-white">
  <h1 class="text-sm font-bold text-gray-500">AS FEATURED IN</h1>
  <div class="flex flex-row content-between items-baseline gap-x-10 pt-5">
    <img src="/img/telkomschools.png" class="w-32 grayscale" />
    <img src="/img/telkomindonesia.png" class="w-32 grayscale" />
    <img src="/img/telkomuniversity.png" class="w-32 grayscale" />
    <img src="/img/yptelkom.png" class="w-32 grayscale" />
  </div>
  </div>
  <!-- Feature Section End -->
  @auth
  
  @else
  <!-- Sign Up Card Start -->
  <div class="p-6 bg-white">
    <div class="p-6 max-w-lg bg-gradient-to-tr from-[#E67E22] to-[#FC6011] rounded-lg border border-gray-200 shadow-md mx-auto my-10">
      <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
          Let's Find Your Teacher!
        </h5>
      </a>
      <p class="mb-3 font-normal text-gray-200">
        Register to this website or hit the Sign In button if you already have
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
@endsection