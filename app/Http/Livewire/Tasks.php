<?php
namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

use function PHPSTORM_META\elementType;

class Tasks extends Component
{
    use WithPagination;
    public $search;
    public $input = 'title';
    public $method = 'asc';
    public $bool = 0;

    public function sort($id)
    {

        if (!$this->bool == 0)
        {
            $this->method = 'desc';
            $this->bool = 0;
        }
        else
        {
            $this->bool = 1;
            $this->method = 'asc';
        }

        $this->input = $id;
    }
    public function getPriority($num)
    {
        if ($num == 1) return "Top";
        if ($num == 2) return "Moderate";
        if ($num == 3) return "Normal";
        if ($num == 4) return "Low";
        else return "None";
    }
    public function render()
    {
        $user = auth()->user();
        $tasks = $user->tasks()
            ->where('title', 'like', '%' . $this->search . '%')
            ->orderBy($this->input, $this->method)
            ->paginate(7);

        return view('livewire.tasks', ['tasks' => $tasks]);
    }
}

