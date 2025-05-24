@props(['post'])
<div>
    <article class="[&:not(:last-child)]:border-b border-gray-100 pb-10">
        <div class="article-body grid grid-cols-12 gap-3 mt-5 items-start">
            <div class="article-thumbnail col-span-4 flex items-center">
                <x-link href="{{route('post.show', [$post->slug])}}">
                    <img class="mw-100 mx-auto rounded-xl" src="{{ $post->getThumbnailUrl() }}" alt="thumbnail">
                </x-link>
            </div>
            <div class="col-span-8">
                <div class="article-meta flex py-1 text-sm items-center">
                    <x-posts.author :author="$post->author" />
                    <span class="text-gray-500 text-xs">{{ $post->published_at->diffForHumans() }}</span>
                </div>
                <h2 class="text-xl font-bold text-gray-900">
                    <x-link href="{{route('post.show', [$post->slug])}}">
                        {{ $post->title }}
                    </x-link>
                </h2>

                <p class="mt-2 text-base text-gray-700 font-light">
                    {{ $post->shortenBody() }}
                </p>
                <div class="article-actions-bar mt-6 flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-500 text-sm">{{ $post->getReadingTime() }} min read</span>
                    </div>
                    <div class="flex gap-x-2">
                        @foreach($post->categories as $category)
                        <x-posts.category-badge :key="$category->id" :category="$category" />
                        @endforeach
                    </div>
                    <div>
                        {{-- now() zorgt voor dat child component wordt herladen (#[reactive] werkt niet !!!) --}}
                        <livewire:like-button :key="$post->id.now()" :post="$post" />
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>