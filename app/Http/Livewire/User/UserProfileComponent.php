<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Auth;

class UserProfileComponent extends Component
{
    public function render()
    {
        $user=User::where('id',Auth::user()->id)->first();
        return view('livewire.user.user-profile-component',['user'=>$user])->layout('layouts.user.base');
    }
}
