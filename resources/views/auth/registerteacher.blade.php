<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #FDF2E9;
        }
    </style>
    <title>findTeacher | {{ $title }} Page</title>
  </head>
  <body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0">
    <header class="max-w-lg mx-auto">
        <a href="/">
            <center><img src="{{ asset('img/findteacher.png') }}" class="h-12"></center>
        </a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Welcome to FindTeacher</h3>
            <p class="text-gray-600 pt-2">Signing up as <a class="text-orange-500">Teacher</a>.</p>
        </section>

        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="/registerteacher">
                @csrf
                <div class="mb-3 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
                    <input placeholder="name@example.com" type="text" id="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 transition duration-300 px-3 pb-3">
                </div>
                @error('email')
                <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                      <span class="font-medium">{{$message }}</span>
                    </div>
                  </div>
                @enderror
                <div class="mb-3 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="name">Name</label>
                    <input placeholder="firstname lastname" type="text" id="name" name="name"  class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 transition duration-300 px-3 pb-3">
                </div>
                @error('name')
                <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                      <span class="font-medium">{{$message }}</span>
                    </div>
                  </div>
                @enderror
                <div class="mb-3 pt-3 rounded bg-gray-200">
                  <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="username">Username</label>
                  <input placeholder="username" type="text" id="username" name="username" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 transition duration-300 px-3 pb-3">
                </div>
                @error('username')
                <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                      <span class="font-medium">{{$message }}</span>
                    </div>
                  </div>
                @enderror
                <div class="mb-3 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                    <input placeholder="password" type="password" id="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 transition duration-300 px-3 pb-3">
                </div>
                @error('password')
                <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                      <span class="font-medium">{{$message }}</span>
                    </div>
                  </div>
                @enderror
                <div class="mb-3 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="phone_number">Phone Number</label>
                    <input placeholder="please enter valid phone number" type="tel" id="phone_number"  name="phone_number" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 transition duration-300 px-3 pb-3">
                </div>
                @error('phone_number')
                <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                      <span class="font-medium">{{$message }}</span>
                    </div>
                  </div>
                @enderror
                <button class="mt-6 bg-gray-700 hover:bg-black text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Sign Up</button>
            </form>
        </section>
    </main>

    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-gray-700">Already have an account? <a href="/loginteacher" class="font-bold hover:underline">Sign in</a>.</p>
    </div>

    <footer class="max-w-lg mx-auto flex justify-center text-gray-700">
        <a href="#" class="hover:underline">Contact</a>
        <span class="mx-3">•</span>
        <a href="#" class="hover:underline">Privacy</a>
    </footer>
</body>
</html>
