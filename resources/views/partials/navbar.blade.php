<!-- Navbar Start -->
<nav class="px-2 sm:px-4 py-2.5 bg-[#FDF2E9]">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="/" class="flex items-center">
      <img
        src="/img/findteacher.png"
        class="mr-3 h-6 sm:h-9"
        alt="FindTeacher Logo"
      />
    </a>
    <button data-collapse-toggle="mobile-menu" type="button"
      class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
      aria-controls="mobile-menu"
      aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" fill="currentColor"
        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path
          fill-rule="evenodd"
          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
          clip-rule="evenodd"
        ></path>
      </svg>
      <svg class="hidden w-6 h-6" fill="currentColor"
        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path
          fill-rule="evenodd"
          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
          clip-rule="evenodd"
        ></path>
      </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
      <ul class="flex flex-col md:items-center mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
        <li>
          <a href="/ " class="block py-2 pr-4 pl-3 md:p-0 {{ Request::is('/') ? 'text-gray-700' : 'text-gray-500' }} hover:text-gray-600" aria-current="page" >Home</a>
        </li>
        <li>
          <a href="/subject" class="block py-2 pr-4 pl-3 md:p-0 {{ Request::is('subject*') ? 'text-gray-700' : 'text-gray-500' }} hover:text-gray-600">Subjects</a>
        </li>
        <li>
          <a href="/teacher" class="block py-2 pr-4 pl-3 md:p-0 {{ Request::is('teacher') ? 'text-gray-700' : 'text-gray-500' }} hover:text-gray-600" >Teachers</a>
        </li>
        <li>
          <a href="/about" class="block py-2 pr-4 pl-3 md:p-0 {{ Request::is('about') ? 'text-gray-700' : 'text-gray-500' }} hover:text-gray-600" >About</a>
        </li>
        @auth
        <li>
          <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-bold text-gray-500 border-b border-gray-100 hover:text-orange-600 
           border-0 p-0">{{ auth()->user()->name }} <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd">
            </path></svg></button>
          <!-- Dropdown menu -->
          <div id="dropdownNavbar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow-lg w-44">
              <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bookmarked</a>
                </li>
              </ul>
              <div class="py-1">
                <form action="/logoutstudent" method="post">
                @csrf
                  <button href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-orange-600">Sign out</button>
                </form>
              </div>
          </div>
      </li>
    @else
        <li>
          <a href="/loginstudent" 
          class="text-white bg-orange-600 hover:bg-gray-800 hover:shadow-lg font-medium rounded-full text-sm px-4 mx-2 py-2.5 focus:outline-none"
          >Login
          </a>
        </li>
      </ul>
    </div>
    @endauth
  </div>
</nav>
<!-- Navbar End -->