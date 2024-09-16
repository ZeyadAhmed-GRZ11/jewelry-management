<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use App\Models\Store;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Test extends Component
{
    
    public $jewelry_name;
    public $material_caliber;
    public $description;
    public $material_type;
    public $price;
    public $postId;
    public $oldImage;
    use WithFileUploads;
    use WithPagination;
   #[Rule('image|max:2048')] // 2MB Max
    public $image;
  
    #[Rule('required|min:3')]
    public $title;

    public $isOpen = 0;
  
    public function create()
    {
        $this->openModal();
    }
    public function openModal()
    {
        $this->isOpen = true;
        $this->resetValidation();
    }
    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function store()
    {
    $this->validate();
    Store::create([
        'title' => $this->title,
        'image' => $this->image->store('public/photos'),
        'jewelry_name'=>$this->jewelry_name,
        'material_caliber'=>$this->material_caliber,
        'description'=>$this->description,
        'material_type'=>$this->material_type,
        'price'=>$this->price,
    ]);
    session()->flash('success', 'Image uploaded successfully.');
    $this->reset('title','image','jewelry_name','material_caliber','description','material_type','price');
    $this->closeModal();
    }
    public function edit($id)
     {
      $post = Store::findOrFail($id);
      $this->postId = $id;
      $this->title = $post->title;
      $this->jewelry_name = $post->jewelry_name;
      $this->material_caliber = $post->material_caliber;
      $this->description = $post->description;
      $this->material_type = $post->material_type;
      $this->price = $post->price;
      $this->oldImage = $post->image;
 
      $this->openModal();
     }
     public function update()
    {  
     $this->validate();
     
     $post = Store::findOrFail($this->postId);
        $photo = $post->image;
            if($this->image)
            {
                Storage::delete($post->image);
                $photo = $this->image->store('public/photos');
            }else{
                $photo = $post->image;
            }
 
            $post->update([
                'title' => $this->title,
                'jewelry_name' => $this->jewelry_name,
                'material_caliber' => $this->material_caliber,
                'description' => $this->description,
                'material_type' => $this->material_type,
                'price' => $this->price,
                'image' => $photo,
            ]);
            $this->postId='';
 
            session()->flash('success', 'Image updated successfully.');
            $this->closeModal();
            $this->reset('title', 'image', 'postId','jewelry_name','material_caliber','description','material_type','price');
    }
    public function delete($id)
    {
        $singleImage = Store::findOrFail($id);
        Storage::delete($singleImage->image);
        $singleImage->delete();
        session()->flash('success','Image deleted Successfully!!');
        $this->reset('title','image','jewelry_name','material_caliber','description','material_type','price');
    }

    public function render()
    {
        return view('livewire.test',[
            'posts' => Store::paginate(5),
        ]);
    }
}
