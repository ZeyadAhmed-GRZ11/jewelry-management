<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\store;

class StartPage extends Component
{
    public function render()
    {
        return view('livewire.start-page',[
            'all_jewelries' => $this->all_jewelries,
        ]);
    }
    public function mount(){
        $this->all_jewelries = Store::all();
    }
}
