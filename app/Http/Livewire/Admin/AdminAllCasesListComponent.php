<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Petition;
use Livewire\WithPAgination;

class AdminAllCasesListComponent extends Component
{
    use WithPagination;
    public function deleteProduct($id)
    {
        $product = Petition::find($id);
      
        if($product->files)
        {
            $images=explode(",", $product->files);
            foreach($images as $image)
            {
              if($image)
              {
                unlink('images/files'.'/'.$image);

              }
            }
        }
        $product->delete();
        session()->flash('message','Case has been deleted by you successfully!');
    }
    public function render()
    {
        $cases=Petition::paginate(12);
        return view('livewire.admin.admin-all-cases-list-component',['cases'=>$cases])->layout('layouts.admin.base');
    }
}
