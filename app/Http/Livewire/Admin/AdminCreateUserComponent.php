<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class AdminCreateUserComponent extends Component
{
    use WithPagination;
    public $name;
    public $email;
    public $password;
    public $utype;

   public function updateCity($fields){
       $this->validateOnly($fields,[
        'name'=>'required',
        'email'=>'required|unique:users',
        'password'=>'required|min:8',
        'utype'=>'required'
       ]);
   }
    public function createUser()
    {
        $this->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|min:8',
            'utype'=>'required'
        ]);

         $user=new User();
         $user->name=$this->name;
         $user->email=$this->email;
         $user->utype=$this->utype;
         $user->password=Hash::make($this->password);
         $user->save();

         session()->flash('message','New User is created successfully!');

    }
    public function render()
    {

        return view('livewire.admin.admin-create-user-component')->layout('layouts.admin.base');
    }
}
