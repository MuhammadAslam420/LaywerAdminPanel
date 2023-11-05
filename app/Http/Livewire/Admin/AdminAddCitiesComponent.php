<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\City;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class AdminAddCitiesComponent extends Component
{
    use WithPagination;
    public $city_name;
    public $slug;
    

    public function generateslug()
    {
        $this->slug =Str::slug($this->city_name);
    }
   public function updateCity($fields){
       $this->validateOnly($fields,[
        'city_name'=>'required',
        'slug'=>'required|unique:cities'
       ]);
   }
    public function storeCity()
    {
        $this->validate([
            'city_name'=>'required',
            'slug'=>'required|unique:cities'
        ]);
        
         $city=new City();
         $city->city_name=$this->city_name;
         $city->slug=$this->slug;
         $city->save();
        
         session()->flash('message','City is added right now by you successfully!');
    
    }
    public function render()
    {
        $cities=City::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.admin.admin-add-cities-component',['cities'=>$cities])->layout('layouts.admin.base');
    }
}
