<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class HistorySelect extends Component
{
    public $history;
    public $project;

    public function change(){
      Project::find($this->project)->update(['history_status' => $this->history]);
    }
    public function render()
    {
        return view('livewire.history-select');
    }
}
