<x-layout>
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-gray-100 py-8 px-6 shadow rounded-lg sm:px-10">
            <form class="mb-0 space-y-6" action="/books/reservations" method="POST"
                  class="max-w-xl mx-auto">
                @csrf
                <div>
                    <h2 class="text-blue-500">Reserve Book Form</h2>
                </div>
                <div>
                    <label for="first-name" class="block text-sm font-medium
                    text-gray-700">First Name:</label>
                    <div class="mt-1">
                        <input type="text" name="first_name" value="{{old('first_name')}}" required
                               class="w-full border border-gray px-3 py-2 rounded-lg shadow-sm
                                focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-sm font-medium
                    text-gray-700">Last Name:</label>
                    <div class="mt-1">
                        <input type="text" name="last_name" value="{{old('last_name')}}" required
                               class="w-full border border-gray px-3 py-2 rounded-lg shadow-sm
                                focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium
                    text-gray-700">Email:</label>
                    <div class="mt-1">
                        <input type="text" name="email" value="{{old('email')}}" required
                               class="w-full border border-gray px-3 py-2 rounded-lg shadow-sm
                                focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                    </div>
                </div>
                <div>
                    <label for="tel" class="block text-sm font-medium
                    text-gray-700">Tel:</label>
                    <div class="mt-1">
                        <input type="tel" name="tel" value="{{old('tel')}}" required
                               class="w-full border border-gray px-3 py-2 rounded-lg shadow-sm
                                focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                    </div>
                </div>
                <div>
                    <label for="from_date" class="block text-sm font-medium
                    text-gray-700">Date-From:</label>
                    <div class="mt-1">
                        <input type="date" name="from_date" id="from_date" value="{{old('from_date')}}" required
                               class="w-full border border-gray px-3 py-2 rounded-lg shadow-sm
                                focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                    </div>
                </div>
                <div>
                    <label for="to_date" class="block text-sm font-medium
                    text-gray-700">Due-Date</label><br>
                    <div class="mt-1">
                        <input type="date" name="to_date" id="to_date" value="{{old('to_date')}}" required
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
