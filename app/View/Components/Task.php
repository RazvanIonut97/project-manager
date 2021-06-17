<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Task extends Component
{
    public $task;
    public $project;
    protected $listeners = [
        'refreshComponent' => '$refresh'
    ];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($task,$project)
    {
       $this->task = $task;
       $this->project = $project;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    { 
        return view('components.task');
    }
}
