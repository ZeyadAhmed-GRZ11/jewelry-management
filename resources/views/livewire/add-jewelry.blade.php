<div class="container">
    
<br>
   <div class="row">
      @if($is_flash_showing == true)
       <span class="alert alert-success">Create Successfully</span>
      @endif
   </div>
<br>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Store</h2>
                </div>
                <div class="col">
                    <a href="/jewelryList"  wire:navigate class="btn btn-primary btn-sm float-end">Jewelries List</a>
                </div>
            </div>
        </div>
        <div class="card-body">


        <form action="" wire:submit="saveJewelry">

<div class="mb-3">
     <label for="name" class="form-label">jewelry_name:</label>
     <input type="text" wire:model="jewelry_name" class="form-control" id="jewelry_name" name="jewelry_name" placeholder="Enter jewelry_name">
     @error('jewelry_name')
         <span class="text-danger">{{$message}}</span>
     @enderror
</div>
<div class="mb-3">
     <label for="material_caliber" class="form-label">Material Caliber:</label>
     <input type="number" wire:model="material_caliber" class="form-control" id="material_caliber" name="material_caliber" placeholder="Enter material_caliber">
     @error('material_caliber')
         <span class="text-danger">{{$message}}</span>
     @enderror
</div>
<div class="mb-3">
     <label for="description" class="form-label">description:</label>
     <input type="description" wire:model="description" class="form-control" id="description" name="description" placeholder="Description">
     @error('description')
         <span class="text-danger">{{$message}}</span>
     @enderror
</div>
<div class="mb-3">
     <label for="material_type" class="form-label">Material Type:</label>
    <select name="material_type" wire:model="material_type" id="material_type" class="form_select">
       <option value="">Select Material Type</option>
       <option value="Gold">Gold</option>
       <option value="Silver">Silver</option>
       <option value="Diamond">Diamond</option>
    </select>
    @error('material_type')
         <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="mb-3">
     <label for="price" class="form-label">price:</label>
     <input type="number" wire:model="price" class="form-control" id="price" name="price" placeholder="Enter Price">
     @error('price')
         <span class="text-danger">{{$message}}</span>
     @enderror
</div>

<button type:submit class="btn btn-success">Save</button>

</form>



        </div>

    </div>

</div>
