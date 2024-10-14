<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New Company') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="">
                        <h1 class="p-4">Company Information</h1>
                        
                    </div>
                    <form method="POST" action="{{ route('company.store') }}" enctype="multipart/form-data">
                        <input
                            type="submit"
                            class="bg-green-500 border rounded border-white p-2 m-3 shadow font-bold"
                            value="Save">
                        </input>
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-9 px-4 py-3  ">
                            <div class="">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"/>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div class="">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="">
                                <x-input-label for="logo" :value="__('Logo')" />
                                <input
                                id="logo"
                                name="logo" 
                                type="file" 
                                class="block w-full text-sm text-black-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-gray-200 file:text-black-500 hover:file:bg-black-100"/>
                                <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                            </div>

                            <div class="">
                                <x-input-label for="website" :value="__('Website')" />
                                <x-text-input id="website" class="block mt-1 w-full" type="text" name="website" :value="old('website')"/>
                                <x-input-error :messages="$errors->get('website')" class="mt-2" />
                            </div>

                            <div class="">
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>