<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Label extends Component
{
    public $for;
    public $required;

    /**
     * Create a new component instance.
     *
     * @param  string  $for
     * @param  bool  $required
     */
    public function __construct(string $for, bool $required = false)
    {
        $this->for = $for;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.label');
    }
}
