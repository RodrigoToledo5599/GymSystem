
<div>

    {{-- <button wire:click="queryUsers">djdjdjdjd</button> --}}
    <div wire:poll="queryUsers">
        @foreach($users as $user)
            <livewire:account-component :_user="$user"/>
        @endforeach
    </div>    

</div>


