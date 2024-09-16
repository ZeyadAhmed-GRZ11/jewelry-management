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
						    <h3>
						      <img src="{{ Storage::url($item->image)}}" alt="Uploaded Image Preview" 
							  style="width: 120px; hight: 100px; align-items:center; justify-content:center;">
							</h3>
							<h3><a href="">{{$item->jewelry_name}}</a></h3>
							<h2><a href="">{{$item->price}}</a></h2>
</br>
							<a href="" class="btn-add">Add to cart</a>
							
						 </article>
						@endforeach
						
					</section>
				</div>
			</div>
		</div>

	</div>

</div>
