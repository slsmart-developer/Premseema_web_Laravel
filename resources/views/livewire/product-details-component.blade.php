    <main>
      <div class="container margin_30">

        <div class="row">

          <div class="col-md-6">
            <div class="all">
            <img class="img-fluid lazy item-box" src="{{ asset('assets/img/products/prem_product')}}/{{$product->image}}" data-src="{{ asset('assets/img/products/prem_product')}}/{{$product->image}}" width="400" height="400">
            </div>
          </div>
          <div class="col-md-6">
            <div class="breadcrumbs">
              <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#">Category</a></li>
                <li>Page active</li>
              </ul>
            </div>
            <!-- /page_header -->
            <div class="prod_info">
              <h1>{{$product->name}}</h1>
              <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><em>4 reviews</em></span>
              <p><small>SKU: {{$product->SKU}}</small><br>Sed ex labitur adolescens scriptorem. Te saepe verear tibique sed. Et wisi ridens vix, lorem iudico blandit mel cu. Ex vel sint zril oportere, amet wisi aperiri te cum.</p>
              <div class="prod_options">
                <div class="row">
                  <label class="col-xl-5 col-lg-5  col-md-6 col-6 pt-0"><strong>Availability</strong></label>
                  <div class="col-xl-4 col-lg-5 col-md-6 col-6 colors">
                  <span><h5>{{$product->stock_status}}</h5></span>
                  </div>
                </div>

                <div class="row">
                  <label class="col-xl-5 col-lg-5  col-md-6 col-6"><strong>Quantity</strong></label>
                  <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                    <div class="numbers-row">
                      <input type="text" value="1" id="quantity_1" class="qty2" name="quantity_1">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-5 col-md-6">
                  <div class="price_main"><span class="new_price">₹{{$product->regular_price}}</span> </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="btn_add_to_cart"><a href="#0" class="btn_1" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Add to Cart</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->

      <div class="tabs_product">
        <div class="container">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Description</a>
            </li>
            <li class="nav-item">
              <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Reviews</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /tabs_product -->
      <div class="tab_content_wrapper">
        <div class="container">
          <div class="tab-content" role="tablist">
            <div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
              <div class="card-header" role="tab" id="heading-A">
                <h5 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
                    Description
                  </a>
                </h5>
              </div>
              <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                <div class="card-body">
                  <div class="row justify-content-between">
                    <div class="col-lg-6">
                      <h3>Details</h3>
                      <p>{{$product->description}}</p>
                    </div>
                    <div class="col-lg-5">
                      <h3>Specifications</h3>
                      <div class="table-responsive">
                        <table class="table table-sm table-striped">
                          <tbody>
                            <tr>
                              <td><strong>Color</strong></td>
                              <td>Blue, Purple</td>
                            </tr>
                            <tr>
                              <td><strong>Size</strong></td>
                              <td>150x100x100</td>
                            </tr>
                            <tr>
                              <td><strong>Weight</strong></td>
                              <td>0.6kg</td>
                            </tr>
                            <tr>
                              <td><strong>Manifacturer</strong></td>
                              <td>Manifacturer</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /table-responsive -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /TAB A -->
            <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
              <div class="card-header" role="tab" id="heading-B">
                <h5 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                    Reviews
                  </a>
                </h5>
              </div>
              <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                <div class="card-body">
                  <div class="row justify-content-between">
                    <div class="col-lg-6">
                      <div class="review_content">
                        <div class="clearfix add_bottom_10">
                          <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><em>5.0/5.0</em></span>
                        </div>
                        <h4>"Commpletely satisfied"</h4>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="review_content">
                        <div class="clearfix add_bottom_10">
                          <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star empty"></i><i class="icon-star empty"></i><em>4.0/5.0</em></span>
                        </div>
                        <h4>"Always the best"</h4>
                      </div>
                    </div>
                  </div>
                  <!-- /row -->
                  <div class="row justify-content-between">
                    <div class="col-lg-6">
                      <div class="review_content">
                        <div class="clearfix add_bottom_10">
                          <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star empty"></i><em>4.5/5.0</em></span>
                        </div>
                        <h4>"Outstanding"</h4>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="review_content">
                        <div class="clearfix add_bottom_10">
                          <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><em>5.0/5.0</em></span>
                        </div>
                        <h4>"Excellent"</h4>
                      </div>
                    </div>
                  </div>
                  <!-- /row -->
                </div>
                <!-- /card-body -->
              </div>
            </div>
            <!-- /tab B -->
          </div>
          <!-- /tab-content -->
        </div>
        <!-- /container -->
      </div>
      <!-- /tab_content_wrapper -->

      <div class="container margin_60_35">
       
  
      </div>
 

    </main>
