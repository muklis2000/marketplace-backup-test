@extends('layouts.auth')

@section('title')
    Reset Password | Tokokoi
@endsection

@section('content')
    <div class="page-content page-auth mt-5" id="register">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4">

              <h2 class="mt-5">
                {{ __('Reset Password') }}
              </h2>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

              <form method="POST" action="{{ route('password.email') }}">
                @csrf

                    <div class="form-group mt-3">
                        <label>{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button 
                        type="submit" 
                        class="btn btn-register btn-block"
                        :disabled="this.email_unavailable"
                        >
                        {{ __('Send Password Reset Link') }}
                    </button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
@endsection