<div>
@vite('resources/css/app.css')


</br>
</hr>
	
@foreach ($all_jewelries  as $item )			
<div class=" place-content-center place-items-center  place-items-stretch flex justify-center space-x-10">
<div class="max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
    <a href="#" class="flex justify-center ml-2 rtl:ml-0">
		<img src="{{ Storage::url($item->image)}}" alt="Uploaded Image Preview">
    </a>
    <br>
    <h1 class=" flex justify-center">
        More Details:
    </h1>
    <div class="p-5" >
      <label for="">Name:</label> <h3>{{$item->jewelry_name}}</h3>
      <label for="">description:</label><h3>{{$item->description}}</h3>
      <label for="">price:</label><h3>{{$item->price}}</h3>
      <label for="">Material Caliber:</label> <h3>{{$item->material_caliber}}</h3>
      <label for="">Material Type:</label><h3>{{$item->material_type}}</h3>
    </div>
    
     <a href="/cart" class="flex justify-center">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add to Cart
        </button>
     </a>
     <br>
</div>

</div>
@endforeach

</br>
</div>
