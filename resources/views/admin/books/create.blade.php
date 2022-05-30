<x-layout>
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-gray-100 py-8 px-6 shadow rounded-lg sm:px-10">
            <form class="mb-0 space-y-6" action="/books/reservations" method="POST"
                  class="max-w-xl mx-auto">
                @csrf
                <div>
                    <h2 class="text-blue-500">Create Book Form</h2>
                </div>
                <div>
                    <label for="title" class="block text-sm font-medium
                    text-gray-700">Title:</label>
                    <div class="mt-1">
                        <input type="text" name="title" value="{{old('title')}}" required
                               class="w-full border border-gray px-3 py-2 rounded-lg shadow-sm
                                focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                    </div>
                </div>
                <div>
                    <label for="author" class="block text-sm font-medium
                    text-gray-700">Author:</label>
                    <div class="mt-1">
                        <input type="text" name="author" value="{{old('author')}}" required
                               class="w-full border border-gray px-3 py-2 rounded-lg shadow-sm
                                focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                    </div>
                </div>
                <div>
                    <label for="genre" class="block text-sm font-medium
                    text-gray-700">Genre:</label>
                    <div class="mt-1">
                        <input type="text" name="genre" value="{{old('genre')}}" required
                               class="w-full border border-gray px-3 py-2 rounded-lg shadow-sm
                                focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                    </div>
                </div>
                <div>
                    <label for="synopsis" class="block text-sm font-medium
                    text-gray-700">Synopsis:</label>
                    <div class="mt-1">
                        <input type="text" name="synopsis" value="{{old('tel')}}" required
                               class="w-full border border-gray px-3 py-2 rounded-lg shadow-sm
                                focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                    </div>
                </div>
                <div>
                    <label for="image" class="block text-sm font-medium
                    text-gray-700">Image:</label>
                    <div class="mt-1">
                        <input type="file" name="image" id="image" required
                               class="w-full border border-gray px-3 py-2 rounded-lg shadow-sm
                                focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                    </div>
                </div>
                <div>
                    <label for="published" class="block text-sm font-medium
                    text-gray-700">Published:</label>
                    <div class="mt-1">
                        <input type="date" name="to_date" id="to_date" value="{{old('published')}}" required
                               class="w-full border border-gray px-3 py-2 rounded-lg shadow-sm
                                focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                    </div>
                </div>
                <div class="mt-1">
                    <button class="rounded-sm text-sm bg-blue-200 hover:bg-green-500 p-2">Submit</button>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>
</x-layout>
