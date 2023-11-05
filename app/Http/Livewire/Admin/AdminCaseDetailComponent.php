<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Petition;

class AdminCaseDetailComponent extends Component
{
    public $case_id;
    public function mount($case_id)
    {
        $this->case_id;
    }
    public function render()
    {
        $case=Petition::where('id',$this->case_id)->first();
        return view('livewire.admin.admin-case-detail-component',['case'=>$case])->layout('layouts.admin.base');
    }
}
