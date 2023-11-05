<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Petition;
use App\Models\Hiring;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\HiringMail;

class AdminAddHiringStatusComponent extends Component
{
    use WithFileUploads;
    public $evidences;
    public $remarks;
    public $court_documents;
    public $case_id;
    public $next_hiring_date;
    public function mount($case_id)
    {
        $this->case_id;
    }
    public function update($feilds)
    {
        $this->validateOnly($field,[
        
        'remarks'=>'required',
        'next_hiring_date'=>'required'
        ]);
    }
    public function addCaseStatus()
    {
        $this->validate([
            
            'remarks'=>'required',
            'next_hiring_date'=>'required'
            ]);
     
        $hiring=new Hiring();
        $petition=Petition::where('id',$this->case_id)->first();
        $hiring->petition_id=$petition->id;
        $hiring->remarks=$this->remarks;
        $hiring->next_hiring_date=$this->next_hiring_date;
        
        if($this->evidences)
        {
         
        $imagesname="";
        foreach($this->evidences as $key=>$image)
        {
            $imagename=Carbon::now()->timestamp.$key.'.'.$image->extension();
            $image->storeAs('images/evidence',$imagename);
            $imagesname=$imagesname.','.$imagename;
        }
        $hiring->evidence= $imagesname;
         }
         if($this->court_documents)
         {
          
         $imagesname="";
         foreach($this->court_documents as $key=>$image)
         {
             $imagename=Carbon::now()->timestamp.$key.'.'.$image->extension();
             $image->storeAs('images/court_document',$imagename);
             $imagesname=$imagesname.','.$imagename;
         }
         $hiring->court_document= $imagesname;
          }
        
        $hiring->save();
        session()->flash('message','Status Updated successfully!');
        $this->orderConfirmationMail($petition);
    }
    public function orderConfirmationMail($petition)
    {
        $petition=Petition::where('id',$this->case_id)->first();
        $user=User::where('id',$petition->user_id)->first();
        Mail::to($user->email)->send(new HiringMail($petition));
  
      }
    public function render()
    {
        return view('livewire.admin.admin-add-hiring-status-component')->layout('layouts.admin.base');
    }
}
