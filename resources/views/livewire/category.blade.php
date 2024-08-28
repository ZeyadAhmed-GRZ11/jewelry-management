<div>
	<div id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="#">Home</a></li>
				<li>Categories</li>
			</ul>
		</div>
	
	</div>
	

	<div id="body">
		<div class="container">
			<div class="pagination">
				<ul>
					<li><a href="#"><span class="ico-prev"></span></a></li>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><span class="ico-next"></span></a></li>
				</ul>
			</div>
			<div class="products-wrap">
				<aside id="sidebar">

               <div class="row md-3 p-2">
				 <label for="">Budget Range:</label>
			     <input type="number" wire:model="price" type="search" placeholder="price">
</br>
</br>
                 <label for="">Material Type:</label>
                 <select name="material_type" wire:model="material_type" id="material_type" class="form_select">
                    <option value="">No Selected</option>
                    <option value="Gold">Gold</option>
                    <option value="White Gold">White Gold</option>
                    <option value="Silver">Silver</option>
                    <option value="Diamond">Diamond</option>
                 </select>
</br>
</br>
				
			   </div>

				</aside>

				<div class="row md-3 p-2">
                   <form class="d-flex" wire:submit.prevent="search">
                     <form class="d-flex" role="search">
                      <input wire:model="jewelry_name" class="form-control me-2" type="search" placeholder="Search ..." aria-label="Search">
                      <button class="btn btn-outline-success" type="submit" style="margin: around 30px;">Search</button>
                     </form>
                    </form>
                </div>
				<div id="content">
					<section class="products">

						@foreach ($jewelry  as $item )
						 <article>
							<a href=""> @if ($item->image != "")
                                         <img width="50" src="{{ asset('uploads/products/'.$item->image) }}" alt="">
                                    @endif</a>
							<h4><a href="">{{$item->name}}</a></h4>
							<h4><a href="">{{$item->material_type}}</a></h4>
							<h2><a href="">{{$item->price}}</a></h2>
							<button  wire:click="addToCart">Add to cart</button>
							
						 </article>
						@endforeach
						
					</section>
				</div>
			</div>
		</div>

	</div>

</div>
