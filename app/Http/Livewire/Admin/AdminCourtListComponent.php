<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Court;
use Livewire\WithPagination;

class AdminCourtListComponent extends Component
{
    public function deleteCourt($id)
    {
        $city = Court::find($id);
        $city->delete();
        session()->flash('message','Court has been deleted by you successfully!');
    }
    public function render()
    {
        $courts=Court::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.admin.admin-court-list-component',['courts'=>$courts])->layout('layouts.admin.base');
    }
}
