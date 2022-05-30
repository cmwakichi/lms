@props(['book'])
<article>
    <div class="flex items center">
        <a href="/books/{{$book->id}}"><img src="{{asset('storage/'.$book->image)}}" alt="image" class="mx-2 p-2 w-full h-full"></a>
    </div>
    <div class="mt-4 flex justify-between">
        <div>
            <h3 class="text-sm text-gray-700">
                <a href="/books/{{$book->id}}">
                    {{$book->title}}
                </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">{{$book->author}}</p>
        </div>
        <p class="text-sm font-medium text-gray-900">Published: {{$book->published}}</p>
    </div>
</article>

