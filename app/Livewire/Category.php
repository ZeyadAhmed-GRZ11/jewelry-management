<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\store;

class Category extends Component
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
        return view('livewire.category',[
            $this->all_jewelries = Store::all(),
        ]);
    }
}
