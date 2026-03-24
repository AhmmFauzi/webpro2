<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #e53935;">
  <div class="container">
    
    <a class="navbar-brand fw-bold" href="/">Satset Wash</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active fw-bold' : '' }}" href="/">
            Home
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('layanan') ? 'active fw-bold' : '' }}" href="/layanan">
            Layanan
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('harga') ? 'active fw-bold' : '' }}" href="/harga">
            Harga
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('kontak') ? 'active fw-bold' : '' }}" href="/kontak">
           Kontak
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>