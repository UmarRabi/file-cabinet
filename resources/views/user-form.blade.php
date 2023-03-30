<x-app-layout>
    <x-slot name="header">
        <h2 class="row justify-content-center bg-green font-semibold text-xl leading-tight">
            {{ __(ucfirst(Auth::user()->roles[0]->name) . ' Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 d-flex justify-content-center">
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg d-flex justify-content-center col-xl-4 col-md-6 col-sm-12">
                <div class="col-md-8 col-sm-10" style="margin-top: 20%">
                    <form method="POST" action="{{ route('save-user') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" class="control-label" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full form-control" type="text"
                                name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label class="control-label" for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full form-control" type="email"
                                name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label class="control-label" for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full form-control" type="password"
                                name="password" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label class="control-label" for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full form-control"
                                type="password" name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            {{-- <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a> --}}

                            <x-primary-button class="ml-4 btn btn-green">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
