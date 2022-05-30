@props(['name', 'type'=>'text'])
<x-form.field>
    <x-form.label name="{{ $name }}" />
    <input type="{{$type}}"
           name="{{$name}}"
           id="{{$name}}"
           {{$attributes(['value'=>old('name')])}}
           class="w-full border border-gray-400 "
    />

    <x-form.error name="{{$name}}"/>
</x-form.field>
