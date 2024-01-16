<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-3">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}"  href="/">
            <span data-feather="home" class="align-text-bottom"></span>
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}"  href="/dashboard/posts">
            <span data-feather="file-text" class="align-text-bottom"></span>
            My Post
          </a>
        </li>
      </ul>

      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-item-center px-3 mt-4 mb-1 text-muted">
        <span>Administartor</span>
      </h6>
      <ul class="nav flex-column">
        <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"  href="/dashboard/categories">
          <span data-feather="grid" class="align-text-bottom"></span>
          Post Categories
        </a>
      </ul>
      @endcan
    </div>
  </nav>