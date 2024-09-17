<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use App\Models\Store;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class JewelryList extends Component
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
  
    
    public $isOpen = 0;

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
       

        $jewelry = $query->paginate(20);

        return view('livewire.jewelry-list',[
            'jewelry' => $jewelry,
        ]);
    }

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
        'image' => $this->image->store('public/photos'),
        'jewelry_name'=>$this->jewelry_name,
        'material_caliber'=>$this->material_caliber,
        'description'=>$this->description,
        'material_type'=>$this->material_type,
        'price'=>$this->price,
    ]);
    session()->flash('success', 'Image uploaded successfully.');
    $this->reset('image','jewelry_name','material_caliber','description','material_type','price');
    $this->closeModal();
    }
    public function edit($id)
     {
      $post = Store::findOrFail($id);
      $this->postId = $id;
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
            $this->reset('image', 'postId','jewelry_name','material_caliber','description','material_type','price');
    }
    public function delete($id)
    {
        $singleImage = Store::findOrFail($id);
        Storage::delete($singleImage->image);
        $singleImage->delete();
        session()->flash('success','Image deleted Successfully!!');
        $this->reset('image','jewelry_name','material_caliber','description','material_type','price');
    }

}
