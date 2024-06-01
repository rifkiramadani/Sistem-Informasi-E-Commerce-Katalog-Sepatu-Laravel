<nav class="navbar navbar-expand-lg text-white bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">SIpatu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @auth
        @can('admin')
        <li class="nav-item">
          <a class="nav-link {{ ($navtitle === "Beranda") ? "opacity-75" : '' }} text-white" aria-current="page" href="/beranda">Beranda</a>
        </li>
        @endcan
        <li class="nav-item">
          <a class="nav-link {{ ($navtitle === "Sepatu") ? "opacity-75" : '' }} text-white" href="/sepatu">Sepatu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($navtitle === "category") ? "opacity-75" : ''}} text-white" href="/categories">Kategori</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back, {{auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            @can('admin')
            <li><a class="dropdown-item" href="/beranda">Berandaku</a></li>
            <li><hr class="dropdown-divider"></li>
           @endcan
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link {{ ($navtitle === "Home") ? "opacity-75" : '' }} text-white" aria-current="page" href="/">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ ($navtitle === "Login") ? "opacity-75" : ''}} text-white" href="/login">Login</a>
        </li>
      </ul>
      @endauth
    </div>
  </div>
</nav>