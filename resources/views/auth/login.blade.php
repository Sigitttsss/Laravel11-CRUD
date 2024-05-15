<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="form-container sign-up">
        <form method="POST" action="{{ route('register') }}">
            @csrf
          <h1>Create Account</h1>
          <div class="social-icons">
            <a href="#" class="icon"
              ><i class="fa-brands fa-google-plus-g"></i
            ></a>
            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
            <a href="#" class="icon"
              ><i class="fa-brands fa-linkedin-in"></i
            ></a>
          </div>
          <span>or use your email for registeration</span>
          <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name"/>
          <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email"/>
          <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
          <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>
          <button>{{ __('Register') }}</button>
        </form>
      </div>
    <div class="form-container sign-in">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1>Sign In</h1>
        <div class="social-icons">
            <a href="#" class="icon"
              ><i class="fa-brands fa-google-plus-g"></i
            ></a>
            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
            <a href="#" class="icon"
              ><i class="fa-brands fa-linkedin-in"></i
            ></a>
          </div>
          <span>or use your email password</span>

          {{-- <x-input-label for="email" :value="__('Email')" /> --}}
          <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />

          {{-- <x-input-label for="password" :value="__('Password')" /> --}}
          <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password"/>
          <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <div>
                @if (Route::has('password.request'))
                <a href={{ route('password.request') }}>{{ __('Forgot your password?') }}</a>
                @endif
            </div>

          <button>{{ __('Log in') }}</button>
    </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-left">
            <h1>Welcome Back!</h1>
            <p>Enter your personal details to use all of site features</p>
            <button class="hidden" id="login">Log In</button>
          </div>
          <div class="toggle-panel toggle-right">
            <h1>Hello, Friend!</h1>
            <p>
              Register with your personal details to use all of site features
            </p>
            <button class="hidden" id="register">Sign Up</button>
          </div>
        </div>
      </div>
</x-guest-layout>
