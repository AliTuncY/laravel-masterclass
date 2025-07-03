@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8">
                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">
                            {{ __('Create Book') }}
                        </h2>
                        <a href="{{ route('books.index') }}" class="text-orange-600 hover:underline">
                           Edit Books
                        </a>
                    </div>
                    <form method="POST" action="{{ route('books.store') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                {{ __('Name') }}
                            </label>
                            <input type="text"
                                   id="name"
                                   name="name"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Book name"
                                   required>
                        </div>
                        <div class="mb-6">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                {{ __('Price') }}
                            </label>
                            <input type="text"
                                   id="price"
                                   name="price"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Book price"
                                   required>
                        </div>
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            {{ __('Add') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
