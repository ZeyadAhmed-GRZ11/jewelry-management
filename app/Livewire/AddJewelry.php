<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\store;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;


class AddJewelry extends Component
{

    public $postId;
    public $oldImage;
    use WithFileUploads;
    use WithPagination;
   #[Rule('image|max:2048')] // 2MB Max
    public $image;
  
    #[Rule('required|min:3')]
    public $title;

    public $is_flash_showing = false;

    public $jewelry_name='';
    public $material_caliber='';
    public $description='';
    public $material_type='';
    public $price='';
  
    public function store()
    {
    $this->validate();
    Store::create([
        'image' => $this->image->store('public/photos')
    ]);
    session()->flash('success', 'Image uploaded successfully.');
    $this->reset('title','image');
    }
    public function saveJewelry(){
        $this->validate([
            'jewelry_name'=> 'required',
            'material_caliber'=> 'required',
            'description'=> 'required',
            'material_type'=> 'required',
            'price'=> 'required',
            'image' => 'required|image|mimes:jpg,png',
        ]);


        try{
            $new_store = new Store;
            $new_store->jewelry_name = $this->jewelry_name;
            $new_store->material_caliber = $this->material_caliber;
            $new_store->description = $this->description;
            $new_store->material_type = $this->material_type;
            $new_store->price = $this->price;
            $new_store->image = $this->image;
            $new_store->save();

            // return $this->redirect('/',navigate:true);
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
