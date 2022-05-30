@props(['name'])
<x-form.field>
    <x-form.label name="{{ $name }}" />
    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        cols="10"
        rows="5"
        class="w-full">{{ $slot ?? old($name)}}</textarea>

    <x-form.error name="{{$name}}"/>
</x-form.field>


