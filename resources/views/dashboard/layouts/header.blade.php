<header
      class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"
    >
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/"
        ><img src="{{ asset('img/findteacher-white.png') }}" width="150" height="auto" /></a
      >
      <button
        class="navbar-toggler position-absolute d-md-none collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:rgb(255, 255, 255)" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ auth('teach')->user()->name }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li>
            <form action="/logoutteacher" method="post">
              @csrf
              <button type="submit" class="dropdown-item" href="#"><i class="bi bi-door-closed"></i> Logout</button>
            </form>
          </li>
        </ul>
      </div>
  </header>