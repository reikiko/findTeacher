<nav
  id="sidebarMenu"
  class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin') ? 'text-dark' : 'text-muted'}}" aria-current="page" href="/admin">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/subjects*') ? 'text-dark' : 'text-muted'}}" href="/admin/subjects">
          <span data-feather="file-text"></span>
          Subjects
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/categories*') ? 'text-dark' : 'text-muted'}}" href="/admin/categories">
          <span data-feather="file-text"></span>
          Categories
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/students*') ? 'text-dark' : 'text-muted'}}" href="/admin/students">
          <span data-feather="file-text"></span>
          Students
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/teachers*') ? 'text-dark' : 'text-muted'}}" href="/admin/teachers">
          <span data-feather="file-text"></span>
          Teachers
        </a>
      </li>
    </ul>
  </div>
</nav>