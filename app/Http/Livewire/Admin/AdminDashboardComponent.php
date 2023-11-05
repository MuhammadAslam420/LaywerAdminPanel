<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Petition;
use Livewire\WithPagination;

class AdminDashboardComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $users=User::count();
        $cases=Petition::count();
        $active=Petition::where('status','active')->count();
        $complete=Petition::where('status','complete')->count();
        $allusers=User::where('utype','USR')->paginate(12);
        return view('livewire.admin.admin-dashboard-component',['users'=>$users,'cases'=>$cases,'active'=>$active,
        'complete'=>$complete,'allusers'=>$allusers])->layout('layouts.admin.base');
    }
}
