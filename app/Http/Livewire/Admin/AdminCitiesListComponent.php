<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\City;

class AdminCitiesListComponent extends Component
{
    public function deleteCity($id)
    {
        $city = City::find($id);
        $city->delete();
        session()->flash('message','City has been deleted by you successfully!');
    }
    public function render()
    {
        $cities=City::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.admin.admin-cities-list-component',['cities'=>$cities])->layout('layouts.admin.base');
    }
}
