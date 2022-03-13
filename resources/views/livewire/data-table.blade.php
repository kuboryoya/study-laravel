
<div>
    <h2>DBユーザ一覧</h2>
    <ul>
    @foreach($users as $user)
    <li>
        id: {{$user->id}} |
        name : {{ $user->name }} |
        email : {{ $user->email }}
        <button wire:click="deleteUser({{ $user->id }})">delete</button>
    </li>
    @endforeach
    </ul>
    <button wire:click="createUser()">createUser</button>
</div>
