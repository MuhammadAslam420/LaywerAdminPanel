<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\City;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Models\Court;
class AdminAddcourtComponent extends Component
{
    use WithPagination;
    public $courtname;
    public $slug;
    public $city_id;

    public function generateslug()
    {
        $this->slug =Str::slug($this->courtname);
    }
   public function updateCcourt($fields){
       $this->validateOnly($fields,[
        'city_id'=>'required',
        'courtname'=>'required',
        'slug'=>'required|unique:cities'
       ]);
   }
    public function storeCourt()
    {
        $this->validate([
            'city_id'=>'required',
            'courtname'=>'required',
            'slug'=>'required|unique:cities'
        ]);
        
         $court=new Court();
         $court->city_id=$this->city_id;
         $court->courtname=$this->courtname;
         $court->slug=$this->slug;
         $court->save();
        
         session()->flash('message','Court is added right now by you successfully!');
    
    }
    public function render()
    {
        $cities=City::all();
        $courts=Court::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.admin.admin-addcourt-component',['cities'=>$cities,'courts'=>$courts])->layout('layouts.admin.base');
    }
}
