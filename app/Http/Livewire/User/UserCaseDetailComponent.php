<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Petition;

class UserCaseDetailComponent extends Component
{
    public $case_id;
    public function mount($case_id)
    {
        $this->case_id;
    }
    public function render()
    {
        $case=Petition::where('id',$this->case_id)->first();
        return view('livewire.user.user-case-detail-component',['case'=>$case])->layout('layouts.user.base');
    }
}
