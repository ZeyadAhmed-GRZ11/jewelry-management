<div>
   
	<div id="slider">
		<ul>
			<li style="background-image: url(images/ri1.jpg)">
				<h3>Make your life better</h3>
				<h2>Genuine diamonds</h2>
				<a href="#" class="btn-more">Read more</a>
			</li>
			<li class="purple" style="background-image: url(images/ri2.jpg)">
				<h3>She will say “yes”</h3>
				<h2>engagement ring</h2>
				<a href="#" class="btn-more">Read more</a>
			</li>
			<li class="yellow" style="background-image: url(images/ri3.jpg)">
				<h3>You deserve to be beauty</h3>
				<h2>golden bracelets</h2>
				<a href="#" class="btn-more">Read more</a>
			</li>
		</ul>
	</div>
	

	<div id="body">
		<div class="container">
			<div class="last-products">
				<h2>Last added products</h2>
				<section class="products">

				@foreach ($all_jewelries  as $item )
						 <article>
						    <h3>
						      <img src="{{ Storage::url($item->image)}}" alt="Uploaded Image Preview" 
							  style="width: 120px; hight: 100px; align-items:center; justify-content:center;">
							</h3>
							<h3><a href="">{{$item->jewelry_name}}</a></h3>
							<h2><a href="">{{$item->price}}</a></h2>
							<a href="" class="btn-add">Add to cart</a>
							
						 </article>
						@endforeach
				</section>
			</div>
			<section class="quick-links">
				<article style="background-image: url(images/g1.jpg)">
					<a href="#" class="table">
						<div class="cell">
							<div class="text">
								<h4>Modern Designs</h4>
								<hr>
								<h3>for Classy Women</h3>
							</div>
						</div>
					</a>
				</article>
				<article class="red" style="background-image: url(images/g3.jpg)">
					<a href="#" class="table">
						<div class="cell">
							<div class="text">
								<h4>Shiny Jewelry</h4>
								<hr>
								<h3>For Classy Life</h3>
								<hr>
								<p>Be Classy</p>
							</div>
						</div>
					</a>
				</article>
				<article style="background-image: url(images/g4.jpg);">
					<a href="#" class="table">
						<div class="cell">
							<div class="text">
								<h4>high quality</h4>
								<hr>
								<h3>New Collections</h3>
							</div>
						</div>
					</a>
				</article>
			</section>
		</div>
		
	</div>
	

</div>
