<?php

namespace App\View\Components\Frontend;

use App\Models\Page;
use Illuminate\View\Component;

class PageComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $pages;
    public function __construct()
    {
        $this->pages= Page::get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.page-component');
    }
}
