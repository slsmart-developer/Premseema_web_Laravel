<main>
    <div class="container" style="padding: 30px 0;">
    	<style>
    		nav svg{
    			height: 20px;
    		}
    		nav .hidden{
    			display: block !important;
    		}
    	</style>
    	<div class="row">
    		<div class="col-md-12">
    			<div class="panel panel-default">
    				<div class="panel-heading">
    					All Orders
    				</div>
    				<div class="panel-body">
    					<table class="table table-striped">
    						<thead>
    							<tr>
    								<th>Order ID</th>
    								<th>Subtotal</th>
    								<th>Discount</th>
    								<th>Tax</th>
    								<th>Total</th>
    								<th>First Name</th>
    								<th>Last Name</th>
    								<th>Mobile</th>
    								<th>Email</th>
    								<th>Zipcode</th>
    								<th>Status</th>
    								<th>Order Date</th>
    							</tr>
    						</thead>
    						<tbody>
    							@foreach ($orders as $order)
    								<tr>
    									<td>{{$order->id}}</td>
    									<td>₹{{$order->subtotal}}</td>
    									<td>₹{{$order->discount}}</td>
    									<td>₹{{$order->tax}}</td>
    									<td>₹{{$order->total}}</td>
    									<td>{{$order->firstname}}</td>
    									<td>{{$order->lastname}}</td>
    									<td>{{$order->mobile}}</td>
    									<td>{{$order->email}}</td>
    									<td>{{$order->zipcode}}</td>
    									<td>{{$order->status}}</td>
    									<td>{{$order->created_at}}</td>
    								</tr>
    							@endforeach
    						</tbody>
    					</table>
    					{{$orders->links()}}
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</main>
