<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Petition;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Court;

class AdminEditCaseComponent extends Component
{
    use WithFileUploads;
    public $case_id;
    public $case;
    public $user_id;
    public $court_id;
    public $city_id;
    public $clientname;
    public $regular_price;
    public $mobile;
    public $address;
    public $town;
    public $province;
    public $case_amount;
    public $taken_amount;
    public $files;
    public $newfiles;
    public $status;
    public $case_start_date;

    public function mount($case_id)
    {
    
    $product= Petition::where('id',$this->case_id)->first();
    $this->court_id=$product->court_id;
    $this->case=$product->case;
    $this->clientname=$product->clientname;
    $this->mobile=$product->mobile;
    $this->address=$product->address;
    $this->town=$product->town;
    $this->province=$product->province;
    $this->case_amount=$product->case_amount;
    $this->files=explode(",",$product->files);
    $this->taken_amount=$product->taken_amount;
    $this->case_start_date=$product->case_start_date;
    $this->status=$product->status;

   
    }
    public function updated($field)
    {
        $this->validateOnly($field,[
        'court_id'=>'required',
        'case'=>'required',
        'clientname'=>'required',
        'mobile'=>'required',
        'address'=>'required',
        'town'=>'required',
        'province'=>'required',
        'case_amount'=>'required',
        'taken_amount'=>'required',
        'case_start_date'=>'required',
        'status'=>'required'
        ]);
     
     }
    public function updateProduct()
    {
        $this->validate([
            'court_id'=>'required',
            'case'=>'required',
            'clientname'=>'required',
            'mobile'=>'required',
            'address'=>'required',
            'town'=>'required',
            'province'=>'required',
            'case_amount'=>'required',
            'taken_amount'=>'required',
            'case_start_date'=>'required',
            'status'=>'required'
            ]);
     
        $product=Petition::find($this->case_id);
        $product->court_id = $this->court_id;
        $product->case=$this->case;
        $product->clientname=$this->clientname;
        $product->address=$this->address;
        $product->town=$this->town;
        $product->province=$this->province;
        $product->case_amount=$this->case_amount;
        $product->taken_amount=$this->taken_amount;
        $product->case_start_date=$this->case_start_date;
        $product->status=$this->status;
        if($this->newfiles)
        {
            if($product->files)
           {
                $images=explode(",",$product->files);
                foreach($images as $image)
                {
                    if($image)
                    {
                        unlink('images/files'.'/'.$image);
                    }

                }

           }
        $imagesname="";
        foreach($this->newfiles as $key=>$image)
        {
            $imagename=Carbon::now()->timestamp.$key.'.'.$image->extension();
            $image->storeAs('images/files',$imagename);
            $imagesname=$imagesname.','.$imagename;
        }
        $product->files= $imagesname;
         }
        
        $product->save();
        session()->flash('message','Petition has been Edit successfully!');
    }

    public function render()
    {
        $courts=Court::all();
        return view('livewire.admin.admin-edit-case-component',['courts'=>$courts])->layout('layouts.admin.base');
    }
}
