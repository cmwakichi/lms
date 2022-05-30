@props(['books'])

@if($books->count())
    <div class="lg:grid lg:grid-cols-6">
        @foreach($books as $book)
            <x-book-card :book="$book"
            class="{{$loop->iteration < 3 ? 'col-span-3':'col-span-2'}}"/>
        @endforeach
    </div>
@endif

