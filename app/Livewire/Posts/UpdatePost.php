<?php
 
namespace App\Livewire\Posts;
 
use Livewire\Component;
use App\Models\Post;
 
class UpdatePost extends Component
{
    public $post;
 
    public $title;
 
    public $description;
 
    public function mount(Post $post)
    {
        $this->post = $post;
 
        $this->fill( 
            $post->only('title', 'description'), 
        ); 
    }
 
    // ...
}