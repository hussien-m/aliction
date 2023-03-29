<?php

namespace App\View\Components\Frontend;

use App\Models\ClientService;
use Illuminate\View\Component;

class ClientComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $clients;
    public function __construct()
    {
        $this->clients = ClientService::latest()->paginate(6);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.client-component');
    }
}
