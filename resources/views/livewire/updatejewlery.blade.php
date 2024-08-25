<div class="container">
    
<br>
   <div class="row">
      @if($is_flash_showing == true)
       <span class="alert alert-success">Update Successfully</span>
      @endif
   </div>
<br>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Edit Jewelry</h2>
                </div>
                <div class="col">
                    <a href="/jewelryList/admin"  wire:navigate class="btn btn-primary btn-sm float-end">Jewelries List</a>
                </div>
            </div>
        </div>
        <div class="card-body">


 <form action="" wire:submit="update">

     <div class="mb-3">
         <label for="name" class="form-label">Jewelry Name:</label>
         <input type="text" wire:model="jewelry_name" class="form-control" id="jewelry_name" name="jewelry_name" placeholder="Enter Jewelry Name" value="{{$jewelry_name}}">
          @error('jewelry_name')
            <span class="text-danger">{{$message}}</span>
          @enderror
     </div>
     <div class="mb-3">
         <label for="material_caliber" class="form-label">Material Caliber:</label>
         <input type="number" wire:model="material_caliber" class="form-control" id="material_caliber" name="material_caliber" placeholder="Enter Material Caliber" value="{{$material_caliber}}">
         @error('material_caliber')
           <span class="text-danger">{{$message}}</span>
         @enderror
     </div>
     <div class="mb-3">
        <label for="description" class="form-label">description:</label>
        <input type="description" wire:model="description" class="form-control" id="description" name="description" placeholder="Description" value="{{$description}}">
        @error('description')
           <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
       <label for="material_type" class="form-label">Material Type:</label>
       <select name="material_type" wire:model="material_type" id="material_type" class="form_select">
          <option value="{{$material_type}}">value="{{$material_type}}"</option>
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
        <input type="number" wire:model="price" class="form-control" id="price" name="price" placeholder="Enter Price" value="{{$price}}">
        @error('price')
          <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <button type:submit class="btn btn-success">Update</button>

</form>



        </div>

    </div>

    <br>

</div>
