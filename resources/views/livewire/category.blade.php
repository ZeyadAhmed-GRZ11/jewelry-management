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

				     <h1>search bar here......</h1>

				</aside>
				<div id="content">
					<section class="products">
						<article>
							<a href="product.html"><img src="images/11.jpg" alt=""></a>
							<h3><a href="product.html">Lorem ipsum dolor</a></h3>
							<h4><a href="product.html">$990.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="images/12.jpg" alt=""></a>
							<h3><a href="product.html">cupidatat non proident</a></h3>
							<h4><a href="product.html">$1 200.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="images/13.jpg" alt=""></a>
							<h3><a href="product.html">Duis aute irure</a></h3>
							<h4><a href="product.html">$2 650.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="images/14.jpg" alt=""></a>
							<h3><a href="product.html">magna aliqua</a></h3>
							<h4><a href="product.html">$3 500.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="images/15.jpg" alt=""></a>
							<h3><a href="product.html">Lorem ipsum dolor</a></h3>
							<h4><a href="product.html">$1 500.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="images/1.jpg" alt=""></a>
							<h3><a href="product.html">cupidatat non proident</a></h3>
							<h4><a href="product.html">$3 200.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="images/16.jpg" alt=""></a>
							<h3><a href="product.html">Duis aute irure</a></h3>
							<h4><a href="product.html">$2 650.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="images/17.jpg" alt=""></a>
							<h3><a href="product.html">magna aliqua</a></h3>
							<h4><a href="product.html">$3 500.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>

						@foreach ($all_jewelries as $item )
						 <article>
							<a href=""><img src="images/17.jpg" alt=""></a>
							<h3><a href="">{{$item->jewelry_name}}</a></h3>
							<h4><a href="">{{$item->price}}</a></h4>
							<a href="" class="btn-add">Add to cart</a>
						 </article>
						@endforeach
						
					</section>
				</div>
			</div>
		</div>

	</div>

</div>
