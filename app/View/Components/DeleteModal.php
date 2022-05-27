<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeleteModal extends Component
{

    public $title;
    public $msg1;
    public $msg2;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $msg1 = '', $msg2 = '')
    {
        $this->title = $title;
        $this->msg1 = $msg1;
        $this->msg2 = $msg2;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.delete-modal');
    }
}