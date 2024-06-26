<?php

namespace App\Livewire;

use Livewire\Component;
use Exception;
use Livewire\Attributes\Title;

#[Title('Todo List')]

class Todo extends Component
{
    public $newTodo = '';
    public $todos = [];
    private $placeholder = 'Type your todo here...';

    public function mount()
    {
        $this->todos = [
            'Learn Livewire',
            'Learn Laravel ',
            'Learn Express',
        ];

        $this->newTodo = $this->placeholder;
    }

    public function updated($property, $value)
    {
        try {
            if ($property === 'newTodo' && $value === 'Play Cricket') {
                throw new Exception('You can not add Play Cricket to your todo list');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function clear()
    {
        $this->newTodo = '';
    }

    public function addTodo()
    {
        $this->todos[] = $this->newTodo;
        $this->newTodo = '';
    }
    public function render()
    {
        return view('livewire.todo');
    }
}
