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
          <h2 class="text-center text-3xl font-extrabold text-gray-900">Sign in to your account</h2>
          <p class="mt-2 text-center text-sm text-gray-600">but first
            <a class="font-medium text-orange-500">Choose your type of account</a>
          </p>
        </section>

        <form class="mt-8 space-y-6" action="#">
          <div class="flex flex-col space-y-4">
            <a
              href="/loginstudent"
              type="button"
              class="group relative w-full flex justify-center py-3 border border-transparent text-sm font-medium rounded-lg text-white bg-gray-700 hover:shadow-xl"
            >
              <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <img
                  class="mx-auto h-9 w-auto"
                  src="{{ asset('img/student.png') }}"
                  alt="FindTeacher"
                />
              </span>
              Student
            </a>
            <a
              href="/loginteacher"
              type="button"
              class="group relative w-full flex justify-center py-3 border border-transparent text-sm font-medium rounded-lg text-white bg-gray-700 hover:shadow-xl"
            >
              <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <img
                  class="mx-auto h-9 w-auto"
                  src="{{ asset('img/teacher.png') }}"
                  alt="FindTeacher"
                />
              </span>
              Teacher
            </a>
          </div>
        </form>
    </main>

    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-gray-700">Already have an account? <a href="/login" class="font-bold hover:underline">Sign in</a>.</p>
    </div>

    <footer class="max-w-lg mx-auto flex justify-center text-gray-700">
        <a href="#" class="hover:underline">Contact</a>
        <span class="mx-3">•</span>
        <a href="#" class="hover:underline">Privacy</a>
    </footer>
</body>
</html>
