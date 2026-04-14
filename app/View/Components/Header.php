<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $apartados;

    public function __construct($apartados)
    {
        $this->apartados = $apartados;
    }

    public function render()
    {
        return view('components.header');
    }
}
