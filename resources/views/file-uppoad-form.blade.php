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
                    <form method="POST" action="{{ route('uplaod') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- Name -->
                        <div class="mt-2">
                            <x-input-label for="name" class="control-label" :value="__('File')" />
                            <input type="file" name="file" class="form-control">
                            <x-input-error :messages="$errors->get('file')" class="mt-2" />
                        </div>

                        <div class="mt-2">
                            <x-input-label for="name" class="control-label" :value="__('Description')" />
                            <textarea type="file" name="description" class="form-control"></textarea>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
