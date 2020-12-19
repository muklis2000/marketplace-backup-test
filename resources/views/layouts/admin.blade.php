<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="shortcut icon" href="/images/new-logo-1.svg" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>
    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>
    
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css" integrity="sha512-gp+RQIipEa1X7Sq1vYXnuOW96C4704yI1n0YB9T/KqdvqaEgL6nAuTSrKufUX3VBONq/TPuKiXGLVgBKicZ0KA==" crossorigin="anonymous" />

    @stack('addon-style')
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/new-logo.svg" alt="" class="my-4"/>
          </div>
          <div class="list-group list-group-flush">
            <a
              href="{{ route('admin-dashboard') }}"
              class="list-group-item list-group-item-action"
              >Dashboard</a
            >
            <a
              href="{{ route('report.order') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/order')) ? 'active' : '' }}"
              >Laporan Transaksi</a
            >
            <a
              href="{{ route('product.index') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/product')) ? 'active' : '' }}"
              >Products</a
            >
            <a
              href="{{ route('product-gallery.index') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/product-gallery*')) ? 'active' : '' }}"
              >Galleries</a
            >
            <a
              href="{{ route('category.index') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/category*')) ? 'active' : '' }}"
              >Categories</a
            >
            <a
              href="#"
              class="list-group-item list-group-item-action"
              >Transactions</a
            >
            <a
              href="{{ route('user.index') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/user*')) ? 'active' : '' }}"
              >Users</a
            >
            <a
              href="{{ route('iklan.index') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/iklan*')) ? 'active' : '' }}"
              >Iklan</a
            >
            <a
              href="{{ route('sosial.index') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/sosial*')) ? 'active' : '' }}"
              >Sosial Media</a
            >
            <a
              href="{{ route('aksi.index') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/aksi*')) ? 'active' : '' }}"
              >Call to Action</a
            >
            <a
              href="{{ route('help.index') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/help*')) ? 'active' : '' }}"
              >Bantuan</a
            >
            <a
              href="{{ route('bank.index') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/bank')) ? 'active' : '' }}"
              >Bank User</a
            >
            <a
              href="{{ route('banklist.index') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/banklist')) ? 'active' : '' }}"
              >Daftar Bank</a
            >
            <a
              href="{{ route('contact.index') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/contact*')) ? 'active' : '' }}"
              >Inbox</a
            >
            <a
              href="{{ route('blogcategory.index') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/blogcategory')) ? 'active' : '' }}"
              >Blog Category</a
            >
            <a
              href="{{ route('blog.index') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/blog')) ? 'active' : '' }}"
              >Blog</a
            >
            <a
              href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
              class="list-group-item list-group-item-action"
              >Sign Out</a
            >
          </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
            data-aos="fade-down"
          >
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2"
              id="menu-toggle"
            >
              &laquo; Menu
            </button>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto d-none d-lg-flex">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="#"
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
                    Hi, {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('home') }}">Home</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                  </div>
                </li>
              </ul>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
              <!-- Mobile Menu -->
              <ul class="navbar-nav d-block d-lg-none mt-3">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Hi, Angga
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-inline-block" href="#">
                    Cart
                  </a>
                </li>
              </ul>
            </div>
          </nav>


            {{-- Content --}}
            @yield('content')
        
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    @include('sweetalert::alert')

    @stack('prepend-script')
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>

    <script>
      function ConfirmDelete()
      {
        var x = confirm("Yakin ingin hapus data?");
        if (x)
          return true;
        else
          return false;
      }
    </script>
    
    @stack('addon-script')
  </body>
</html>
