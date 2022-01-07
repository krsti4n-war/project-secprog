@extends('layout.app')

@section('content')
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Best Toys</h4>
                    <h2>Mainan lengkap, harga murah</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Beli Mainan</h4>
                    <h2>biar si-bocah makin seneng</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Happy Family</h4>
                    <h2>Makin dekat dengan anak</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Latest Products</h2>
                        <a href="products">view all products <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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

    {{-- <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>About Sixteen Clothing</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Looking for the best products?</h4>
                        <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
                        <ul class="featured-list">
                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#">Consectetur an adipisicing elit</a></li>
                            <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                            <li><a href="#">Corporis, omnis doloremque</a></li>
                            <li><a href="#">Non cum id reprehenderit</a></li>
                        </ul>
                        <a href="about" class="filled-button">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="assets/images/feature-image.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="filled-button">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD:resources/views/home.blade.php


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
                    - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                                     //declaring the array outside of the
            if(!cleared[t.id]){                                            // function makes it static and global
                cleared[t.id] = 1;    // you could use true and false, but that's more typing
                t.value='';                 // with more chance of typos
                t.style.color='#fff';
            }
        }
    </script>


</body>
</html>
=======
@endsection('content')
>>>>>>> pr/2:resources/views/pages/home.blade.php
