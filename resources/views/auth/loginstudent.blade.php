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
            <p class="text-gray-600 pt-2">Sign in to your account<a class="text-orange-500"> as Student</a>.</p>
        </section>
        @if (session()->has('success'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            {{ session('success') }}
        </div>
        @endif
        @if (session()->has('loginError'))
        <div class="p-4 mb-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            {{ session('loginError') }}
        </div>
        @endif
        <section class="mt-4">
            <form class="flex flex-col" action="/loginstudent" method="post">
                @csrf
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="username">Username</label>
                    <input type="text" id="username" name="username" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 transition duration-300 px-3 pb-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                    <input type="password" id="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 transition duration-300 px-3 pb-3">
                </div>
                <div class="flex justify-end">
                    <a href="/choose" class="text-sm text-black hover:text-gray-600 hover:underline mb-6">or Change your type of account</a>
                </div>
                <button class="bg-gray-700 hover:bg-black text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Sign In</button>
            </form>
        </section>
    </main>

    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-gray-700">Don't have an account? <a href="/registerstudent" class="font-bold hover:underline">Sign up</a>.</p>
    </div>

    <footer class="max-w-lg mx-auto flex justify-center text-gray-700">
        <a href="#" class="hover:underline">Contact</a>
        <span class="mx-3">•</span>
        <a href="#" class="hover:underline">Privacy</a>
    </footer>
</body>
</html>
