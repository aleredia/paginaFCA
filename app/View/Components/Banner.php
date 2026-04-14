<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Banner extends Component
{
    public $imagen;
    public $texto;

    public function __construct($imagen, $texto = null)
    {
        $this->imagen = $imagen;
        $this->texto = $texto;
    }

    public function render()
    {
        return view('components.banner');
    }
}
