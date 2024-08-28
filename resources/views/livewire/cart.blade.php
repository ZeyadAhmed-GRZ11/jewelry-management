<div>

	<div id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="#">Home</a></li>
				<li>Cart</li>
			</ul>
		</div>

	</div>
	
	<div id="body">
		<div class="container">
			<div id="content" class="full">
				<div class="cart-table">
					<table>
						<tr>
							<th class="items">Items</th>
							<th class="price">Price</th>
							<th class="qnt">Quantity</th>
							<th class="total">Total</th>
							<th class="delete"></th>
						</tr>
						@foreach($cart as $item)
						<tr>
							<td class="items">
								<div class="image">
									<img src="images/je1.jpeg" alt="">
								</div>
								<h3><a href="#">{{ $item['name'] }}</a></h3>
								<!-- <p>Quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum.</p> -->
							</td>
							<td class="price">${{ $item['price'] }}</td>
							<td class="qnt"><select><option>1</option><option>2</option></select></td>
							<td class="total">${{ $item['price'] }}</td>
							<td class="delete"><a href="#" class="ico-del"></a></td>
							<button wire:click="removeFromCart({{ $item['id'] }})">Remove</button>
						</tr>
						@endforeach
					</table>
					
				</div>

				<!-- <div class="total-count">
					<h4>Subtotal: $4 500.00</h4>
					<p>+shippment: $30.00</p>
					<h3>Total to pay: <strong>$4 530.00</strong></h3>
					<a href="#" class="btn-grey">Buy Now</a>
				</div>  -->

    <button wire:click="addToCart(1, '', 10.99)">Add Product 1</button>
    <button wire:click="addToCart(2, 'Product 2', 15.99)">Add Product 2</button> 

</div>

			</div>
		</div>
	</div>

</div>
