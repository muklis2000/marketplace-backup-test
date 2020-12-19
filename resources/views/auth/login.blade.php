@extends('layouts.auth')

@section('title')
    Login | Tokokoi
@endsection

@section('content')
    <div class="page-content page-auth">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row align-items-center row-login">
            <div class="col-lg-6 text-center">
              <img
                src="/images/new-login.png"
                alt=""
                class="w-100 mb-4"
              />
            </div>
            <div class="col-lg-5">
              <h2>
                Gabung dan nikmati<br />
                Kemudahan bertransaksi
              </h2>

              @if(session('success'))
                <div class="alert alert-success" role="alert">
                  {{ session('success') }}
                </div>
              @endif

              <form method="POST" action="{{ route('login') }}" class="mt-3">
                @csrf
                <div class="form-group">
                  <label>Email</label>
                  <input id="email" type="email" class="form-control w-75 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="muklisadi1998@gmail.com">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input id="password" type="password" class="form-control w-75 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <input type="checkbox" class="form-checkbox"> Lihat Password

                <button
                type="submit"
                class="btn btn-register btn-block w-75"
                >
                  Login
                </button>

                    @if (Route::has('password.request'))
                      <a class="btn btn-signup w-75 mt-2" href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                      </a>
                    @endif

                <p class="mb-3 mt-3">Belum punya akun?</p>
                <a class="btn btn-signup w-75 mt-2" href="{{ route('register') }}">
                  Daftar di sini
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@push('addon-script')
<script src="/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('#password').attr('type','text');
			}else{
				$('#password').attr('type','password');
			}
		});
	});
</script>
@endpush
