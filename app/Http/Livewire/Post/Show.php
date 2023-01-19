<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Show extends Component
{
    public $post;

    public $excerpt = false;

    public function showPost(){
        if($this->excerpt)
        {
            return redirect()->to('/blog/'.$this->post->slug);
        }
    }
    
    public function render()
    {
        return view('livewire.post.show');
    }
}
