<div >
    <style>
        div {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
    </style>
    
    <h1>Todo List</h1>
    <form wire:submit="addTodo">
        <label>
            <input type="text" wire:model.live="newTodo" wire:click="clear">
            <button type="submit">Add</button>
        </label>
    </form>
    <ul>
        @foreach($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
        {{ $newTodo }}

</div>

