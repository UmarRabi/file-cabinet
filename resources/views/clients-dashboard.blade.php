<x-app-layout>
    <x-slot name="header">
        <h2 class="row justify-content-center bg-green font-semibold text-xl leading-tight">
            {{ __(ucfirst(Auth::user()->roles[0]->name) . ' Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 d-flex justify-content-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg col-xl-4 col-sm-12">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="row">
                        <a href="{{ route('files') }}" style="width: 100%; " class="btn">Upload
                            <i class="fa fa-upload"></i>
                        </a>
                    </div>
                    <div class="row">
                        <button style="width: 100%; " class="btn">Share
                            <i class="fa fa-share"></i>
                        </button>
                    </div>
                    @if (Auth::user()->hasRole('admin'))
                        <div class="row">
                            <a href="{{ route('list-users') }}" style="width: 100%; " class="btn">Manage Users
                                <i class="fa fa-user"></i>
                            </a>
                        </div>
                    @endif
                    <div class="row">
                        <button style="width: 100%; " class="btn">Alert
                            <i class="fa fa-alert"></i>
                        </button>
                    </div>
                    <div class="row">
                        <button style="width: 100%; " class="btn">Book Appointment
                            <i class="fa fa-calendar"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
