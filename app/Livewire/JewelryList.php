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
    public $image;

    public function mount(){
        $this->all_jewelries = Store::all();
    }

    protected $queryString = [
        'jewelry_name' => ['except' => ''],
        'material_type' => ['except' => ''],
        'price' => ['except' => ''],
    ];

    public function updating($name, $value)
    {
        $this->resetPage();
    }

    public function search(){
        $this->resetPage();
        $this->updateQueryString();
    }

    public function updateQueryString(){
        $this->resetPage();
    }

    public function resetPage(){
        $this->currentPage = 1;
    }

    public function render()
    {
        $query = store::query();

        if ($this->jewelry_name) {
            $query->where('jewelry_name', 'like', '%' . $this->jewelry_name . '%');
        }

        if ($this->material_type) {
            $query->where('material_type', 'like', '%' . $this->material_type . '%');
        }

        if ($this->price) {
            $query->where('price', $this->price);
        }
       

        $jewelry = $query->paginate(10);

        return view('livewire.jewelry-list',[
            'jewelry' => $jewelry,
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
