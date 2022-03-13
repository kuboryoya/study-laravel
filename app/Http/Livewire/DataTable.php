<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DataTable extends Component
{
    public $users;

    public function mount(){
        $this->users = User::all();
    }

    // ユーザー作成
    public function createUser(){
        // ランダムな3文字生成
        $random = Str::random(3);
        $user = User::create([
            'name' => 'Some One',
            'email' => $random.'@email.com',
            'password' => Hash::make('password'),
        ]);
        $this->mount();
    }

    // ユーザー削除
    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        $this->mount();
    }

    public function render()
    {
        return view('livewire.data-table');
    }

}
