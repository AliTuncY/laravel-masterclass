@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">
                            {{ __('Edit Books') }}
                        </h2>
                        <a href="{{ route('books.create') }}" class="text-green-600 hover:underline">
                           Create Books
                        </a>
                    </div>

                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Book Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Book Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($books as $book)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $book->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $book->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $book->price }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('books.edit', $book->id) }}" class="text-blue-600 hover:text-blue-900">
                                            {{ __('Edit') }}
                                        </a>
                                        <a href="{{ route('books.delete', $book->id) }}" class="ml-4 text-red-600 hover:text-red-900">
                                            {{ __('Delete') }}
                                        </a>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
