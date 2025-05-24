<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class LikeButton extends Component
{
    #[Reactive]
    public Post $post;

    public function toggleLike()
    {
        //redirect if user is not logged in 
        if (Auth::guest()) {
            return $this->redirect(route('login'));
        }

        $user = Auth::user();

        if ($user->hasliked($this->post)) {
            $user->likes()->detach($this->post);
            return;
        }

        $user->likes()->attach($this->post);
    }


    public function render()
    {
        return view('livewire.like-button');
    }
}
