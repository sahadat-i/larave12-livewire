<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';
    public $todos;
    public $todo = '';
    public function render()
    {
        $cari = $this->todo;
        $data = Todo::paginate(10);
        if ($this->todo) {
            $data = Todo::where('item', 'like', "%{$cari}%")->paginate(10);
        }
        return view('livewire.todo-list', ['data' => $data])->title('Todo List');
    }
    public function delete($id)
    {
        $data = Todo::find($id);
        if ($data) {
            $data->delete();
            $this->todos = Todo::all(); // Refresh the list
        }
    }
    public function complete($id)
    {
        $data = Todo::find($id);
        if ($data) {
            $data->completed = true;
            $data->save();
        }
        session()->flash('status', 'data list successfully updated.');
    }
}
