<!-- Navigation -->
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="/images/new-logo.svg" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('categories*')) ? 'active' : '' }}" href="{{ route('categories') }}">Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('bantuan')) ? 'active' : '' }}" href="{{ route('bantuan') }}">Bantuan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('ketentuan')) ? 'active' : '' }}" href="{{ route('ketentuan') }}">Panduan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('blog')) ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
            </li>
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Daftar</a>
            </li>
            <li class="nav-item">
              <a
                class="btn btn-success btn-login"
                href="{{ route('login') }}"
                >Login</a
              >
            </li>
            @endguest

          </ul>

          @auth
          <ul class="navbar-nav d-none d-lg-flex">

            <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >

                      @if(Auth::user()->photo != null )
                        <img
                          src="{{ Storage::url(Auth::user()->photo) }}"
                          alt=""
                          class="rounded-circle mr-2 profile-picture"
                        />
                      @else
                        <img
                          src="/images/user-images.svg"
                          alt=""
                          class="rounded-circle mr-2 profile-picture"
                        />
                      @endif
              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <br>
                <a href="#" class="dropdown-item">
                  @if(Auth::user()->photo != null )
                        <img
                          src="{{ Storage::url(Auth::user()->photo) }}"
                          alt=""
                          class="rounded-circle mr-2 profile-picture-new"
                        />
                      @else
                        <img
                          src="/images/user-images.svg"
                          alt=""
                          class="rounded-circle mr-2 profile-picture-new"
                        />
                      @endif
                      Hi, {{ Auth::user()->name }}</a>
                <br>
                <div class="dropdown-divider"></div>
                <a href="{{ route('profile-saya') }}" class="dropdown-item">Toko Saya</a>
                <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                <a href="{{ route('riwayat-transaksi') }}" class="dropdown-item">Riwayat Transaksi</a>
                <a href="{{ route('dashboard-settings-account') }}" class="dropdown-item"
                  >Pengaturan Akun</a
                >
                <a href="{{ route('favorit') }}" class="dropdown-item">Wishlish</a>
                <a href="#" class="dropdown-item">Komplain</a>
                <a href="{{ route('user.password.edit') }}" class="dropdown-item">Ganti Password</a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                class="dropdown-item">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                
              </div>

            </li>
            <li class="nav-item">
              <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
                @php
                  $carts = \App\Cart::where('users_id', Auth::user()->id)->count();
                @endphp
                @if ($carts > 0 )
                  <img src="/images/icon-cart-filled.svg" alt="" />
                  <div class="cart-badge">{{ $carts }}</div>       
                @else
                  <img src="/images/icon-cart-empty.svg" alt="" />
                @endif
              </a>
            </li>
          </ul>

          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a href="#" class="nav-link">
                Hi, {{ Auth::user()->name }}
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('cart') }}" class="nav-link d-inline-block">
                Keranjang
              </a>
            </li>
          </ul>
          @endauth

          
        </div>
      </div>
    </nav>