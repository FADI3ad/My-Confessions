<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageHeader extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $total;

    public function __construct($title, $total = 0)
    {
        $this->title = $title;
        $this->total = $total;
    }

    public function render()
    {
        return view('components.page-header');
    }
}
