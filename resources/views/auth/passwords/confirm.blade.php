@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 55vh; margin-top: 40px;">
    <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%; border-radius: 20px;">
        <div class="card-body">
            <h3 class="text-center mb-4 fw-bold">{{ __('Confirm Password') }}</h3>

            <p class="text-center">{{ __('Please confirm your password before continuing.') }}</p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="mb-3">
                    <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100 mb-3">
                    {{ __('Confirm Password') }}
                </button>

                @if (Route::has('password.request'))
                    <div class="text-center">
                        <a class="text-decoration-none" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection
