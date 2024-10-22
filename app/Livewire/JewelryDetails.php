<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\store;

class JewelryDetails extends Component
{
    public $all_jewelries;

    public $jewelry_name;
    public $material_caliber;
    public $description;
    public $material_type;
    public $price;

    public $cart = [];

    public function addToCart($productId, $productName, $productPrice)
    {
        $this->cart[] = [
            'id' => $productId,
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => 1,
        ];
    }

    public function removeFromCart($productId)
    {
        $this->cart = array_filter($this->cart, function($item) use ($productId) {
            return $item['id'] != $productId;
        });
    }

    public function mount(){
        $this->all_jewelries = Store::all();
    }
    public function render()
    {
        return view('livewire.jewelry-details',[
            'all_jewelries' => $this->all_jewelries,
        ]);
    }
}
