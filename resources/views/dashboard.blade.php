<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="font-semibold">Companies</h2>

                    <button
                        onclick="location.href = '/company/new'" 
                        class="bg-blue-300 border rounded border-white p-3 my-6 shadow font-bold">
                        Add New Company
                    </button>

                    <div class="overflow-x-auto bg-white dark:bg-neutral-700">
                        <table class="min-w-full text-left text-sm whitespace-nowrap">
                        <thead class="uppercase tracking-wider border-b-2 dark:border-neutral-600">
                            <tr>
                                <th scope="col" class="px-6 py-4">
                                    NAME
                                </th>
                                <th scope="col" class="px-6 py-4">
                                    EMAIL
                                </th>
                                <th scope="col" class="px-6 py-4">
                                    WEBSITE
                                </th>
                                <th scope="col" class="px-6 py-4">
                                    ACTION
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($companies as $company)
                                <tr class="border-b dark:border-neutral-600">
                                    <td class="px-6 py-4">
                                        {{ $company->name }}<br>
                                        <img class="mt-1 p-2" width="100px" src="storage/{{ $company->logo }}">
                                    </td>
                                    <td class="px-6 py-4">{{ $company->email }}</td>
                                    <td class="px-6 py-4">{{ $company->website }}</td>
                                    <td class="px-6 py-4">
                                        <a href="company/edit/{{ $company->id }}">Edit</a> | 
                                        <a href="company/delete/{{ $company->id }}">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="px-6 py-4" colspan="4">No Items</td>
                                </tr>
                            @endforelse
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
