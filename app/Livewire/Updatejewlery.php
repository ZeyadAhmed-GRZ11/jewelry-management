<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\store;

class Updatejewlery extends Component
{

    public $is_flash_showing = false;

    public $jewelry_id;
    public store $jewelry_data;
    public $jewelry_name='';
    public $material_caliber='';
    public $description='';
    public $material_type='';
    public $price='';

    public function mount($id){
     if($id){
        
       $this->jewelry_id = $id;

       $this->jewelry_data = store::where('id',$id)->first();
       $this->jewelry_name = $this->jewelry_data->jewelry_name;
       $this->material_caliber = $this->jewelry_data->material_caliber;
       $this->description = $this->jewelry_data->description;
       $this->material_type = $this->jewelry_data->material_type;
       $this->price = $this->jewelry_data->price;
    }
}

    public function update(){
        $this->validate([
            'jewelry_name'=> 'required',
            'material_caliber'=> 'required',
            'description'=> 'required',
            'material_type'=> 'required',
            'price'=> 'required',
        ]);

        try{
           store::where('id',$this->jewelry_id)->update([   

            //   dd($this->jewelry_id);

              'jewelry_name' => $this->jewelry_name,
              'material_caliber' => $this->material_caliber,
              'description' => $this->description,
              'material_type' => $this->material_type,
              'price' => $this->price,
           ]);
            $this->is_flash_showing = true;
            // $this->redirect('/jewelryList/admin',navigate:true);

           }catch(\Exception $th){
            dd($th);
           }
      
    }
    public function render()
    {
        return view('livewire.updatejewlery');
    }
}
