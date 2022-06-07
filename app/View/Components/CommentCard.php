<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CommentCard extends Component
{
    public $user;
    public $comment;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($user, $comment)
    {
        $this->user = $user;
        $this->comment = $comment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.comment-card');
    }
}