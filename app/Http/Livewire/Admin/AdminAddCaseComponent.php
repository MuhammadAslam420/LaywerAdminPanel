<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Petition;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Court;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\StatusMail;
class AdminAddCaseComponent extends Component
{
    use WithFileUploads;
    public $case;
    public $user_id;
    public $court_id;
    public $city_id;
    public $clientname;
    public $mobile;
    public $address;
    public $town;
    public $province;
    public $case_amount;
    public $taken_amount;
    public $files;
    public $case_start_date;

    public function updated($field)
    {
        $this->validateOnly($field,[
        'user_id'=>'required',
        'court_id'=>'required',
        'city_id'=>'required',
        'case'=>'required',
        'clientname'=>'required',
        'mobile'=>'required',
        'address'=>'required',
        'town'=>'required',
        'province'=>'required',
        'case_amount'=>'required',
        'taken_amount'=>'required',
        'case_start_date'=>'required'
        ]);
     
     }
    public function addProduct()
    {
        $this->validate([
            'user_id'=>'required',
            'court_id'=>'required',
            'city_id'=>'required',
            'case'=>'required',
            'clientname'=>'required',
            'mobile'=>'required',
            'address'=>'required',
            'town'=>'required',
            'province'=>'required',
            'case_amount'=>'required',
            'taken_amount'=>'required',
            'case_start_date'=>'required'
            ]);
     
        $petition=new Petition();
        $petition->user_id=$this->user_id;
        $petition->court_id = $this->court_id;
        $petition->city_id=$this->city_id;
        $petition->case=$this->case;
        $petition->mobile=$this->mobile;
        $petition->clientname=$this->clientname;
        $petition->address=$this->address;
        $petition->town=$this->town;
        $petition->province=$this->province;
        $petition->case_amount=$this->case_amount;
        $petition->taken_amount=$this->taken_amount;
        $petition->case_start_date=$this->case_start_date;
        $petition->status='active';
        if($this->files)
        {
         
        $imagesname="";
        foreach($this->files as $key=>$image)
        {
            $imagename=Carbon::now()->timestamp.$key.'.'.$image->extension();
            $image->storeAs('images/files',$imagename);
            $imagesname=$imagesname.','.$imagename;
        }
        $petition->files= $imagesname;
         }
        
        $petition->save();
        session()->flash('message','Petition has been Added successfully!');
        $this->orderConfirmationMail($petition);
    }
    public function orderConfirmationMail($petition)
    {
        $user=User::where('id',$this->user_id)->first();
        Mail::to($user->email)->send(new StatusMail($petition));
  
      }
    public function render()
    {
        $users=User::where('utype','USR')->get();
        $courts=Court::all();
        return view('livewire.admin.admin-add-case-component',['users'=>$users,'courts'=>$courts])->layout('layouts.admin.base');
    }
}
