<x-app-layout title="Home">
    @section('blogHead')
    <div class="w-full text-center py-32">
        <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
            Welcome to <span class="text-blue-500">Blog</span> <span class="text-gray-900"> News</span>
        </h1>
        <p class="text-gray-500 text-lg mt-1">Blog post website</p>
        <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block" wire:navigate
            href="{{ route('post.index') }}">Start Reading</a>
    </div>
    @endsection


    <div class="mb-10">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-blue-500 font-bold">Featured Posts</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">

                    @foreach ($featuredPosts as $post)
                    <div class="md:col-span-1 col-span-3">
                        <x-posts.post-card :post="$post" :key="'featured-'.$post->id" />
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
        <hr>

        <h2 class=" mt-16 mb-5 text-3xl text-blue-500 font-bold">Latest Posts</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 gap-y-32 w-full">
                @foreach ($latestPosts as $post)
                <div class="md:col-span-1 col-span-3">
                    <x-posts.post-card :post="$post" />
                </div>
                @endforeach
            </div>
        </div>
        @php
        $currentNumPosts = request('numPosts', 3);
        $nextNumPosts = $currentNumPosts + 3;
        @endphp
        <a class="mt-10 block text-center text-lg text-blue-500 font-semibold"
            href="{{ route('home', ['numPosts' => $nextNumPosts]) }}">More
            Posts</a>
    </div>

</x-app-layout>