@extends('layout.app')

@section('content')
    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>sixteen products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All Products</li>
                            <li data-filter=".des">Featured</li>
                            <li data-filter=".dev">Flash Deals</li>
                            <li data-filter=".gra">Last Minute</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="filters-content">
                        <div class="row grid">
                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/products/product_01.jpg" alt="" style="height:300px;"></a>
                                    <div class="down-content">
                                        <a href="#"><h4>LEGO Pesawat <br> Star Wars</h4></a>
                                        <h6>Rp 200.000</h6>
                                        <p>Ini Pesawat yang ada di Star Wars.</p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half"></i></li>
                                        </ul>
                                        <span>Reviews (20)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all dev">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/products/product_02.jpg" alt="" style="height:300px;"></a>
                                    <div class="down-content">
                                        <a href="#"><h4>POPTIMUS PRIME</h4></a>
                                        <h6>Rp 100.000</h6>
                                        <p>Versi KW Optimus Prime.</p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half"></i></li>
                                        </ul>
                                        <span>Reviews (15)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all gra">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/products/product_03.jpg" alt="" style="height:300px;"></a>
                                    <div class="down-content">
                                        <a href="#"><h4>UNO CARD</h4></a>
                                        <h6>Rp 20.000</h6>
                                        <p>Kartu UNO ini.</p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (150)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all gra">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/products/product_04.jpg" alt="" style="height:300px;"></a>
                                    <div class="down-content">
                                        <a href="#"><h4>LEGO Benteng <br> Star Wars</h4></a>
                                        <h6>Rp 400.000</h6>
                                        <p>Benteng bentengan orang makar.</p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half"></i></li>
                                        </ul>
                                        <span>Reviews (48)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all dev">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/products/product_05.jpg" alt="" style="height:300px;"></a>
                                    <div class="down-content">
                                        <a href="#"><h4>Santai Aja Lagi</h4></a>
                                        <h6>Rp 69.069</h6>
                                        <p>Santai bos.</p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (6969)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/products/product_06.jpg" alt="" style="height:300px;"></a>
                                    <div class="down-content">
                                        <a href="#"><h4>WTC New York</h4></a>
                                        <h6>Rp 10.000.000</h6>
                                        <p>Mengenang Tragedi.</p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (1)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="pages">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
