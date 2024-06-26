<div>
    <h1>Counter</h1>
    <h2>{{ $count }}</h2>
    <button wire:click="increment(5)">+</button>
    <button wire:click="decrement">-</button>
    <button wire:mouseenter="resets">Reset</button>
</div>

