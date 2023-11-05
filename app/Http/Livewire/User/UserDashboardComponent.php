<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Petition;
use App\Models\User;
use App\Models\Hiring;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class UserDashboardComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $cases=Petition::where('user_id',Auth::user()->id)->count();
        $cases1=Petition::where('user_id',Auth::user()->id)->orderBy('created_at','DESC')->paginate(10);
        return view('livewire.user.user-dashboard-component',['cases'=>$cases,'cases1'=>$cases1])->layout('layouts.user.base');
    }
}
