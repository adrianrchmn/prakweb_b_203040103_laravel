<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class=""></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span class="" data-feather="file-text"></span>
            My Posts
          </a>
        </li>
      </ul>

      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-beetween align-item-center px-3 mt-4 mb-1 text-muted">
        <span>Administratior</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span class="" data-feather="grid"></span>
            Post Categories
          </a>
        </li>
      </ul>
      @endcan

    </div>
  </nav>