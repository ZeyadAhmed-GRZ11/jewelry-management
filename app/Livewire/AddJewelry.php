<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\store;

class AddJewelry extends Component
{

    public $is_flash_showing = false;

    public $jewelry_name='';
    public $material_caliber='';
    public $description='';
    public $material_type='';
    public $price='';

    public function saveJewelry(){
        $this->validate([
            'jewelry_name'=> 'required',
            'material_caliber'=> 'required',
            'description'=> 'required',
            'material_type'=> 'required',
            'price'=> 'required',
        ]);

        try{
            $new_store = new Store;
            $new_store->jewelry_name = $this->jewelry_name;
            $new_store->material_caliber = $this->material_caliber;
            $new_store->description = $this->description;
            $new_store->material_type = $this->material_type;
            $new_store->price = $this->price;
            $new_store->save();

            // return $this->redirect('/cars/list',navigate:true);
            $this->is_flash_showing = true;

        }catch(\Exception $e){
           dd($e);
        }
    }
    public function render()
    {
        return view('livewire.add-jewelry');
    }
}
