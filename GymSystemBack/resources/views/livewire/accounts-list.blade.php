
<div>
    <div wire:poll>
        @foreach($users as $user)
            {{$user->name}} <br>
        @endforeach
    </div>    
</div>


