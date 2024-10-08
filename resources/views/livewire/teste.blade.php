<div>
    <div>
        <input wire:model.live='search' />
    </div>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
