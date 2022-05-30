<x-layout>
    @include('books._header')
    <main class="p-8">
        @if($books->count())
            <x-books-grid :books="$books"/>
        @else
        <div>
            <p>No Books Yet</p>
        </div>
        @endif
    </main>
</x-layout>
