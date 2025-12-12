<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    public $action;
    public $method;
    public $hasFiles;
    public $spellcheck;

    /**
     * Create a new component instance.
     *
     * @param  string  $action
     * @param  string  $method
     * @param  bool  $hasFiles
     * @param  bool  $spellcheck
     * @return void
     */
    public function __construct(string $action, string $method = 'POST', bool $hasFiles = false, bool $spellcheck = false)
    {
        $this->action = $action;
        $this->method = strtoupper($method);
        $this->hasFiles = filter_var($hasFiles, FILTER_VALIDATE_BOOLEAN);
        $this->spellcheck = filter_var($spellcheck, FILTER_VALIDATE_BOOLEAN);
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.form');
    }
}
