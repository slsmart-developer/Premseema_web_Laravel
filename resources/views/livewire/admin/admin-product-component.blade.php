<main>
<div class="col-md-12">
	<style>
		nav svg{
			height: 20px;
		}
		nav .hidden{
			display:block !important;
		}
	</style>
    <div class="container" style="padding: 30px 0;">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="panel panel-default">
    				<div class="panel-heading">
    					<div class="row">
                            <div class="col-md-6">
                               <h3> All Products </h3>
                            </div>
                            <div class="col-md-6">
                                <h3><a href="{{route('admin.addproduct')}}" class="btn_1 pull-right">Add New</a></h3>
                            </div>
                        </div>
    				</div>
    				<div class="panel-body">
    				    @if(Session::has('message'))
    				        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
    				    @endif
    					<table class="table table-striped">
    						<thead>
    							<tr>
    								<th>Id</th>
    								<th>Image</th>
    								<th>Name</th>
    								<th>Stock</th>
    								<th>Price</th>
    								<th>Date</th>
    								<th>Action</th>
    							</tr>
    						</thead>
    						<tbody>
    							@foreach ($products as $product)
    								<tr>
    									<td>{{$product->id}}</td>
    									<td><img src="{{ asset('assets/img/products/prem_product')}}/{{$product->image}}" width="60" /></td>
    									<td>{{$product->name}}</td>
    									<td>{{$product->stock_status}}</td>
    									<td>₹{{$product->regular_price}}</td>
    									<td>{{$product->created_at}}</td>
    									<td>
    									    <a href="" > EDIT</a>
    									    <a href="#" style="margin-left:10px;" wire:click.prevent="deleteProduct({{$product->id}})">Delete <i class="fa fa-times fa-2x text-danger"></i></a>
    									</td>
    								</tr>
    							@endforeach
    						</tbody>

    					</table>
    					{{$products->links()}}
    				</div>
    			</div>

    		</div>

    	</div>
    </div>
</div>
</main>
