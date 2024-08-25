<div class="container">
    <br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>All Jewelries in Store</h2>
                </div>
                <div class="col">
                    <a href="/add/jewelry" wire:navigate  class="btn btn-success btn-sm float-end">Add New Jewelry</a>
                </div>
            </div>

            <div class="row md-3 p-2">

             <!-- <form class="d-flex" wire:submit.prevent="search">
                <form class="d-flex" role="search">
                  <input wire:model="" wire:model="" class="form-control me-2" type="search" placeholder="Search ..." aria-label="Search">
                  <button class="btn btn-outline-success" type="submit" style="margin: around 30px;">Search</button>
                </form>
             </form> -->
             
         
            </div>


        </div>
        <div class="card-body">
           
        <table class="table">
           <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Material Caliber</th>
                <th scope="col">Description</th>
                <th scope="col">Material Type</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
              </tr>
           </thead>
           <tbody>
            @foreach ($all_jewelries as $item )
              <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td>{{$item->jewelry_name}}</td>
                <td>{{$item->material_caliber}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->material_type}}</td>
                <td>{{$item->price}}</td>
                <td>
                  <a href="/edit/jewelry/{{$item->id}}" wire:navigate  class="btn btn-primary">Edit</a>
                  <button wire:click="delete({{$item->id}})" wire:confirm="Only admin who can do this action!" class="btn btn-danger btn-sm">Delete</button>
                </td>
                <td>
                  <div class="spinner-grow" role="status" wire:loading>  {{--.target="delete({{$item->id}})"--}}
                    <span class="visually-hidden">Loading...</span>
                  </div>
                </td>
              </tr>
            @endforeach
              
           </tbody>
        </table>

        <!-- <div x-data="{ count: 0 }">
          <h2 x-text="count"></h2>
          <button x-on:click="count++">+</button>
        </div> -->
      
        {{--  {{ $cars->links() }} --}} 

        <!-- <div>
          <h1 class="font-light">Done</h1>
          <h1 class="font-light bg-red-600">done</h1>
        </div> -->
      


        <!-- <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
           <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
              <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
           </svg>
          Buy now
        </button> -->


        
        </div>
    </div>
</div>
