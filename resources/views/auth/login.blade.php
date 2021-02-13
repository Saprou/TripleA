    <x-guest-layout>
        <div class="loginForm">
        <x-auth-card>

    <x-slot name="logo">
        <section>
        <a href="/">
            <img src="{{asset('images/logo.png')}}" alt="">
        </a>
    </section>
    </x-slot>

    
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
    
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />
    
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>
    
                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />
    
                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div>
    
                <!-- Remember Me -->
                <div class="rememberMe">
 <section>
    <label for="remember_me" class="inline-flex items-center">
        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
        <span>{{ __('Remember me') }}</span>
    </label>
 </section>
<section>
    @if (Route::has('password.request'))
    <a href="{{ route('password.request') }}">
        {{ __('Forgot your password?') }}
    </a>
@endif
</section>
                </div>
<section>
    <x-button class="ml-3">
        {{ __('Login') }}
    </x-button>
</section>
            </form>
        </x-auth-card>
</div>

    </x-guest-layout>
    