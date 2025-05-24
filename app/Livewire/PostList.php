<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    #[Url()]
    public string $search = '';

    #[Url()]
    public string $category = '';

    #[Url()]
    public string $sortDirection = 'DESC';


    public function sortingPosts($sortDirection): void
    {
        $this->sortDirection = in_array($sortDirection, ['ASC', 'DESC']) ? $sortDirection : 'DESC';
    }

    //listen to event
    #[On('search')]
    public function searching($search): void
    {
        $this->search = $search;
        $this->category = '';
        $this->resetPage();
    }

    #[On('resetSearch')]
    public function resetSearch(): void
    {
        $this->search = '';
        $this->category = '';
        $this->resetPage();
    }

    public function posts()
    {
        return Post::published()
            ->with('author')
            ->when(
                $this->activeCategories(),
                fn($query) => ($query->getPostsByCategory(Str::slug($this->category)))
            )
            ->where('title', 'like', "%{$this->search}%")
            ->orderBy('published_at', $this->sortDirection)->paginate(10);
    }

    public function activeCategories()
    {
        return Category::where('slug', Str::slug($this->category))->first() ?? null;
    }

    public function render()
    {
        return view('livewire.post-list', [
            'posts' => $this->posts(),
        ]);
    }
}
