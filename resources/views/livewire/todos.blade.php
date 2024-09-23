<div>
    <form wire:submit="addTodo">
        <input type="text" wire:model.live="todo">
        <button type="submit">Submit</button>
    </form>

    {{ $todo }}
    <ul>
        @foreach($todos as $todo)
        <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
