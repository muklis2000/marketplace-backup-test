<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="shortcut icon" href="/images/new-logo-1.svg" />
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="/vendor/dist/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="/vendor/dist/assets/owl.theme.default.min.css" rel="stylesheet" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <div id='ignielToTop'></div>

    {{-- Navbar --}}
    @include('includes.navbar')

    @if(Auth::check() && !Auth::user()->email_verified_at)
    <div class="page-content page-home">
      <section>
        <div class="alert alert-danger mb-n1 text-center" role="alert">
          Anda belum verifikasi email,

          <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
          @csrf
              <button type="submit" class="text-danger btn btn-link p-0 m-0 align-baseline">{{ __('Verifikasi ulang') }}</button>.
          </form>

        </div>
      </section>
    </div>
    @endif

    <div class="container mt-3 mb-3">
      <div class="row justify-content-end">
        <div class="col-md-6">
          @if (session('resent'))
            <div class="alert alert-success" role="alert">
              {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
          @endif
        </div>
      </div>
    </div>


    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script')
    @include('sweetalert::alert')
    @stack('addon-script')
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script> //<![CDATA[
        /* Back To Top Pure JS by igniel.com */
        var igniel_kecepatan = 1000; //kecepatan scroll
        var igniel_jarak = 500; //posisi munculnya tombol
        eval(function (p, a, c, k, e, d) { e = function (c) { return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36)) }; if (!''.replace(/^/, String)) { while (c--) { d[e(c)] = k[c] || e(c) } k = [function (e) { return d[e] }]; e = function () { return '\\w+' }; c = 1 }; while (c--) { if (k[c]) { p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]) } } return p }('f 7=["\\h\\a\\g\\h\\F","\\C\\h\\w\\c\\a\\a\\l\\c\\v","\\e\\c\\h\\K\\p\\9\\d\\b\\m\\a\\9\\p\\9\\d\\b","\\G\\c\\e\\q","\\J\\e\\e\\m\\I\\9\\d\\b\\H\\g\\C\\b\\9\\d\\9\\w","\\g\\u\\d\\g\\9\\a\\l\\c\\l\\c\\v","\\u\\9\\b\\m\\a\\9\\p\\9\\d\\b\\M\\q\\U\\e"];8[7[6]](7[5])[7[4]](7[0],j x(){f i=8[7[2]][7[1]]||8[7[3]][7[1]];o(k<=0){s};f r=0-i;f t=r/k*X;L(j(){8[7[3]][7[1]]=8[7[2]][7[1]]=i+t;o(i==0){s};x(8[7[3]],0,k)},P)},Q);B.Y(\'O\',j(){o(B.N>=n||8.R.z>=n||8.W.z>=n){8.y(\'A\').E.D=\'V\'}T{8.y(\'A\').E.D=\'S\'}});', 61, 61, '|||||||_0x3e17|document|x65|x6C|x74|x6F|x6E|x64|var|x69|x63|_0x2ceax2|function|igniel_kecepatan|x54|x45|igniel_jarak|if|x6D|x79|_0x2ceax3|return|_0x2ceax4|x67|x70|x72|ignielScroll|getElementById|scrollTop|ignielToTop|window|x73|display|style|x6B|x62|x4C|x76|x61|x75|setTimeout|x42|pageYOffset|scroll|10|false|documentElement|none|else|x49|block|body|50|addEventListener'.split('|'), 0, {}));
      //]]>
    </script>
    <script src="/vendor/dist/owl.carousel.min.js"></script>
  </body>
</html>
