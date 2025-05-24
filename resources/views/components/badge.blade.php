@props(['category'])
<button {{$attributes}} class="bg-red-300 text-red-800 rounded-xl py-1 px-2 text-base"
    style="background: {{ $category->{'bg-color'} }}; color:{{ $category->{'text-color'} }}">
    {{ $category->title }}
</button>