<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div class="flex items-center space-x-4 font-light ">
            <button wire:click="sortingPosts('DESC')"
                class="{{($sortDirection === 'DESC')? 'text-gray-900 border-b border-gray-700':'text-gray-500'}} py-4">Latest</button>
            <button wire:click="sortingPosts('ASC')"
                class="{{($sortDirection === 'ASC')? 'text-gray-900 border-b border-gray-700':'text-gray-500'}} py-4">Oldest</button>
        </div>
        <div class="text-gray-500 bg-white rounded-xl px-2">
            @if($search)
            <button wire:click="resetSearch">x</button>
            <span> Searching for: {{$search}}</span>
            @endif
        </div>
        <div></div>
    </div>

    <div class="py-4">
        @foreach ($posts as $post)
        <x-posts.post-item :post="$post" :key="$post->id" />
        @endforeach
    </div>
    <div class="my-3">
        {{ $posts->onEachSide(0)->links() }}
    </div>

</div>