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

              <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                            <input type="hidden" name="token" value="{{ $token }}">


                            <div class="form-group mt-3">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>


                            <button 
                                type="submit" 
                                class="btn btn-register btn-block"
                                :disabled="this.email_unavailable"
                                >
                                {{ __('Reset Password') }}
                            </button>
                    </form>
                    
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection