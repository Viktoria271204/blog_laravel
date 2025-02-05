<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Singlepost extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $post;
    public $posts;
    public function __construct($type = 'info', $post = '', $posts = '')
    {
        $this->type = $type;
        $this->post = $post;
        $this->posts = $posts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.singlepost');
    }
}
