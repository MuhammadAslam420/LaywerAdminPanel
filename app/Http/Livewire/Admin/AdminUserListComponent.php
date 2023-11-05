<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminUserListComponent extends Component
{
    use WithPagination;
    public function deleteAccount($id)
    {
        $city = User::find($id);
        $city->delete();
        session()->flash('message','Account has been deleted by you successfully!');
    }
    public function render()
    {
        $users=User::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.admin.admin-user-list-component',['users'=>$users])->layout('layouts.admin.base');
    }
}
