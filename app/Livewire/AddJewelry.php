<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\store;
use Livewire\WithFileUploads;


class AddJewelry extends Component
{

    use WithFileUploads;

    public $is_flash_showing = false;

    public $jewelry_name='';
    public $material_caliber='';
    public $description='';
    public $material_type='';
    public $price='';
    public $image;

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

            if ($this->image != "") {
                $rules['image'] = 'image';
                // return redirect('/')->with('success',$url);
            }

            if ($this->image != "") {
                // here we will store image
                $image = $this->image;
                $ext = $image->getClientOriginalExtension();
                $imageName = time().'.'.$ext; // Unique image name
    
                // Save image to products directory
                // $image->move(public_path('uploads/products'),$imageName);
    
                // Save image name in database
                $new_store->image = $imageName;
                $new_store->save();
            }        

        }catch(\Exception $e){
           dd($e);
        }
    }

    
    public function render()
    {
        return view('livewire.add-jewelry');
    }

}
