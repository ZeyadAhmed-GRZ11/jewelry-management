<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{

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

    public function render()
    {
        return view('livewire.cart');
    }
}
