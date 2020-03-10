<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Error extends Component
{

    public string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function type(string $type = null): string
    {
        return $type ?? 'warning';
    }

    public function render(): View
    {
        return view('component.error');
    }
}
