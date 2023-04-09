<?php

namespace App\View\Components\Blog;

use App\Models\Post;
use Illuminate\View\Component;

class HeaderBlogComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $posts ;
    public function __construct()
    {
        $this->posts = Post::with('category')->latest()->paginate(2);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blog.header-blog-component');
    }
}
