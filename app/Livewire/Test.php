<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Store;
use Gloudemans\Shoppingcart\Facades\Cart;

class Test extends Component
{

    public $products;
    public array $quantity = [];

    public function mount()
    {
        $this->products = Store::all();
        foreach ($this->products as $product) {
            $this->quantity[$product->id] = 1;
        }
    }

    public function render()
    {
        $cart = Cart::content();

        return view('livewire.test',
            compact('cart'));
    }

    public function addToCart($product_id)
    {
        $product = Store::findOrFail($product_id);
        Cart::add(
            $product->id,
            $product->name,
            $this->quantity[$product_id],
            $product->price / 100,
        );

        $this->emit('cart_updated');
    }

}
