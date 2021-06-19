<?php

namespace App\View\Components;

use App\Models\Project;
use Illuminate\View\Component;

class Task extends Component
{
    public $task;
    public $project;
    public $acces;
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
       $this->acces=Project::find($this->project);
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
