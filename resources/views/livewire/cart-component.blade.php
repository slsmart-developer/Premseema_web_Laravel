<main class="bg_gray">
    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active</li>
                </ul>
            </div>
            <h1>Cart page</h1>
        </div>
        @if(Cart::instance('cart')->count() > 0)

        @if(Session::has('success_message'))
            <div class="alert alert-success">
                <strong>Success</strong> {{Session::get('success_message')}}
            </div>
        @endif
        @if(Cart::count() > 0)
        <!-- /page_header -->
        <table class="table table-striped cart-list">
            <thead>
            <tr>
                <th>
                    Product
                </th>
                <th>
                    Price
                </th>
                <th>
                    Quantity
                </th>
                <th>
                    Subtotal
                </th>
                <th>

                </th>
            </tr>
            </thead>
            <tbody>
            @foreach (Cart::content() as $item)
            <tr>
                <td>
                    <div class="thumb_cart">
                        <img src="{{ asset('assets/img/products/product_placeholder_square_small.jpg') }}" data-src="{{ asset('assets/img/products/prem_product')}}/{{$item->model->image}}" class="lazy" alt="{{$item->name}}">
                    </div>
                    <a href="{{route('product.details',['slug'=>$item->model->slug])}}"> <span class="item_cart">{{$item->name}}</span> </a>
                </td>
                <td>
                    <strong>₹{{$item->model->regular_price}}</strong>
                </td>
                <td>
                    <div class="numbers-row">
                        <input type="text" value="{{$item->qty}}" id="quantity_1" class="qty2" name="quantity_1">
                        <div class="inc button_inc" wire:click.prevent="increaseQuantity('{{$item->rowId}}')">+</div><div class="dec button_inc" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')">-</div></div>
                </td>
                <td>
                    <strong>₹{{$item->model->regular_price}}</strong>
                </td>
                <td class="options">
                    <a href="#" wire:click.prevent="destroy('{{$item->rowId}}')"><i class="ti-trash"></i></a>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>


        @else
            <p>No item in cart</p>
        @endif

        <div class="row add_top_30 flex-sm-row-reverse cart_actions">
            <div class="col-sm-4 text-right">
                <button type="button" class="btn_1 gray">Update Cart</button>
            </div>
            <div class="col-sm-8">
                <div class="apply-coupon">
                    <div class="form-group form-inline">
                        <input type="text" name="coupon-code" value="" placeholder="Promo code" class="form-control"><button type="button" class="btn_1 outline">Apply Coupon</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /cart_actions -->
        @else
            <div class="text-center" style="padding:30px 0;">
                <h1>Your cart is empty!</h1>
                <h6>Add items to cart</h6>
                <a href="/products" class="btn_1">Shop Now</a>
            </div>
        @endif

    </div>
    <!-- /container -->

    <div class="box_cart">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <ul>
                        <li>
                            <span>Subtotal</span> ₹{{Cart::subtotal()}}
                        </li>
                        <li>
                            <span>Shipping</span> ₹0.00
                        </li>
                        <li>
                            <span>Total</span> ₹{{Cart::total()}}
                        </li>
                    </ul>
                    <a href="/checkout" wire:click.prevent="checkout" class="btn_1 full-width cart">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /box_cart -->

</main>
