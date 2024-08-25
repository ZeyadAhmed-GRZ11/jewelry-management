<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\store;

class JewelryList extends Component
{

    public $all_jewelries;

    public $jewelry_name;
    public $material_caliber;
    public $description;
    public $material_type;
    public $price;

    public function mount(){
        $this->all_jewelries = Store::all();
    }

    public function render()
    {
        return view('livewire.jewelry-list',[
            $this->all_jewelries = Store::all(),
        ]);
    }

    public function delete($id){
        try{
            Store::where('id', $id)->delete();
            return $this->redirect('',navigate:true);
        }catch(\Exception $th){
            dd($th);
         }
    }
}
