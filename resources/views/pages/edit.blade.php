@extends('layouts.app')

@section('title')
    Edit Password | Tokokoi
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
                Ganti Password<br />
                Untuk keamanan
              </h2>
                        <form method="POST" action="{{ route('user.password.update') }}">
                            @method('patch')
                            @csrf

                            <div class="form-group">
                                <label for="current_password">{{ __('Konfirmasi Password Lama') }}</label>
                                <input id="current_password" type="password" class="form-control w-75 @error('current_password') is-invalid @enderror" name="current_password" required autocomplete="current_password">

                                @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password Baru') }}</label>
                                <input id="password" type="password" class="form-control w-75 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="password-confirm">{{ __('Konfirmasi Password Baru') }}</label>
                                <input id="password-confirm" type="password" class="form-control w-75" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <button type="submit" class="btn btn-register btn-block w-75">
                                Ubah Password
                            </button>
                        </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection