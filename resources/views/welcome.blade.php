@extends('layouts.form')
@section('contents')
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-10" style="margin-top: 30%">
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <x-input-label for="email" class="control-label" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email"
                        :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4 form-group">
                    <x-input-label for="password" class="control-label" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full form-control" type="password" name="password"
                        required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="container">
                    <x-primary-button class="ml-3 btn btn-green pull-right">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
                <div class="mt-4 container">
                    <div class="col-5">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </div>
                <div class="row mt-5">
                    <!-- Facebook -->
                    <div class="col">Signup with:</div>
                    <div class="col">
                        <i class="fab fa-facebook-f"></i>
                    </div>


                    <!-- Twitter -->
                    <div class="col">
                        <i class="fab fa-twitter"></i>
                    </div>


                    <!-- Google -->
                    <div class="col">
                        <i class="fab fa-google"></i>
                    </div>


                    <!-- Instagram -->
                    {{-- <i class="fab fa-instagram"></i>

                    <!-- Linkedin -->
                    <i class="fab fa-linkedin-in"></i>

                    <!-- Pinterest -->
                    <i class="fab fa-pinterest"></i>

                    <!-- Vkontakte -->
                    <i class="fab fa-vk"></i>

                    <!-- Stack overflow -->
                    <i class="fab fa-stack-overflow"></i>

                    <!-- Youtube -->
                    <i class="fab fa-youtube"></i>

                    <!-- Slack -->
                    <i class="fab fa-slack-hash"></i>

                    <!-- Github -->
                    <i class="fab fa-github"></i>

                    <!-- Dribbble -->
                    <i class="fab fa-dribbble"></i>

                    <!-- Reddit -->
                    <i class="fab fa-reddit-alien"></i>

                    <!-- Whatsapp -->
                    <i class="fab fa-whatsapp"></i> --}}
                </div>
            </form>
        </div>
    </div>
@endsection
