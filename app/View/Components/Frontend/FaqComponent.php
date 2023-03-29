<?php

namespace App\View\Components\Frontend;

use App\Models\Faq;
use Illuminate\View\Component;

class FaqComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $faqs;
    public function __construct()
    {
        $this->faqs = Faq::paginate(6);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.faq-component');
    }
}
