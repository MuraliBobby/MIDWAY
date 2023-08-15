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
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <form action="{{ route('addDeal') }}" method="POST" enctype="multipart/form-data" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title:</label>
                    <input type="text" id="title" name="title" required class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-200 rounded-md shadow-sm focus:ring focus:ring-indigo-200">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description:</label>
                    <textarea id="description" name="description" required class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-200 rounded-md shadow-sm focus:ring focus:ring-indigo-200"></textarea>
                </div>
                <div class="mb-4">
                    <label for="images" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Images:</label>
                    <input type="file" id="images" name="images[]" multiple accept="image/*" required class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-200 rounded-md shadow-sm focus:ring focus:ring-indigo-200">
                </div>
                <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:ring focus:ring-indigo-200 dark:focus:ring-dark-mode">Create Deal</button>
            </form>


            @foreach ($dela->images as $image)
                <img src="{{ asset('storage/' . $image->path) }}" alt="Image">
            @endforeach
    </div>


</x-app-layout>
