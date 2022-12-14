<x-guest-layout title="Login">
    <x-auth-card>
        {{-- <x-slot name="logo">
            <a href="/" class="d-flex justify-content-center mb-4">
                <x-application-logo width=64 height=64 />
            </a>
        </x-slot> --}}

        <!-- Session Status -->
        {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

        <!-- Validation Errors -->
        {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

        {{-- <form method="POST" action="{{ route('login') }}">
            @csrf --}}

        <!-- Email Address -->


        <!-- Password -->
        {{-- <div class="mt-4">

            </div> --}}

        <!-- Remember Me -->
        {{-- <div class="mt-3 form-check">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label for="remember_me" class="form-check-label text-sm">
                    {{ __('Remember me') }}
                </label>
            </div> --}}

        {{-- <div class="d-flex justify-content-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-muted" href="{{ route('password.request') }}"
                        style="margin-right: 15px; margin-top: 15px;">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form> --}}

        <a class="text-center" href="/">
            <h4>Posyandu</h4>
        </a>

        <form class="mt-5 mb-5 login-input" action="{{ route('login') }}" method="POST" novalidate>
            @csrf
            <div class="form-group">
                <div>
                    <x-label for="nik" :value="__('NIK/NIP')" />

                    <x-input id="nik" class="" type="text" name="nik" :value="old('nik')" required
                        autofocus />
                    @error('nik')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="" type="password" name="password" required
                    autocomplete="current-password" />
            </div>
            <button class="btn login-form__btn submit w-100">Masuk</button>
        </form>
        {{-- <p class="mt-5 login-form__footer">Dont have account? <a href="page-register.html" class="text-primary">Sign
                Up</a> now</p> --}}

    </x-auth-card>


</x-guest-layout>
