@props(['category'])
<x-badge wire:navigate
         href="{{ route('post.index', ['category' => $category->title]) }}"
         :$category>
</x-badge>

