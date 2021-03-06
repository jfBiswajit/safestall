@include('users.layouts.header')
<div class="container">
	<div class="p-4 border rounded m-4">
		<h4 class="pb-4 mb-3 text-success border-bottom">
			<ion-icon name="cart"></ion-icon>
			<span class="">My Cart</span>
		</h4>
		<table class="table">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Products</th>
					<th scope="col">Price</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody class="font-weight-light">
				@foreach ($cart_data as $key=>$item)
				<tr>
					<th scope="row">{{ ++$key }}</th>
					<td>{{ $item['name'] }}</td>
					<td>৳ {{ $item['price'] }}</td>
					<td></td>
				</tr>
				@endforeach
				<tr class="font-weight-bold">
					<th scope="row"></th>
					<td>Total</td>
					<td>৳ {{ $total }}</td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<div class="d-flex">
			<a href="{{ url('checkout') }}" class="btn btn-success ml-auto">Checkout Now</a>
		</div>
	</div>
</div>
@include('users.layouts.footer')
