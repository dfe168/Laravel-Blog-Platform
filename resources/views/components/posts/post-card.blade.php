@props(['post'])

<div>
    <div class="h-[300px] overflow-hidden">
        <x-link href="{{route('post.show', [$post->slug])}}">
            <img class="w-full object-fit rounded-xl" src="{{ $post->image }}">
        </x-link>
    </div>
    <div class="mt-3">
        <div class="flex justify-between items-center mb-2 space-x-2">
            <div>
                @foreach ($post->categories as $category)
                <x-posts.category-badge :category="$category" :key="$category->id" />
                @endforeach
            </div>
            <div>
                <p class="text-gray-500 text-sm">{{ $post->published_at}}</p>
            </div>
        </div>
        <x-link href="{{route('post.show', [$post->slug])}}" class="text-xl font-bold text-gray-900">{{ $post->title }}
        </x-link>
    </div>
</div>