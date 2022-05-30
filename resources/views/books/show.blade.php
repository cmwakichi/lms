

<section class="bg-gray-100 dark:bg-gray-900 py-12 flex justify-center">
    <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
        <div class="lg:w-1/2">
            <img src="{{asset('storage/'.$book->image)}}" class="rounded-xl mt-4"/>
        </div>

        <div  class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-3xl">Genre <span class="text-blue-600 dark:text-blue-400">{{$book->genre}}</span></h2>
            <p class="mt-4 text-gray-600 dark:text-gray-400">{{$book->synopsis}}</p>

            <div class="mt-8 mb-4">
                <a href="/books/{!! $book->id!!}/reserve">Reserve Book</a>
            </div>
        </div>

    </div>
    <div>
        &laquo;<a href="/" >back</a>
    </div>
</section>
