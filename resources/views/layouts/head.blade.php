<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('ftico.ico') }}"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <title>findTeacher | {{ $title }} Page</title>
    <style>
      .body-bg {
            background-color: #FDF2E9;
        }
    </style>
  </head>
  <body class="body-bg">
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
    <script src="/public/script.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
  </body>
</html>