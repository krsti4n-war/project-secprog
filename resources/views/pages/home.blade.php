@extends('layout.app')

@section('content')
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Best Toys</h4>
                    <h2>Mainan lengkap,<br>harga bersahabat</h2>
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

                {{-- product --}}

                <div class="col-md-12">
                    <div class="filters-content">
                        <div class="row grid">
                            @if(count($products) > 0)
                            @foreach($products as $item)
                            <div class="col-lg-4 col-md-4 all des">

                                <div class="product-item">
                                    <a href="#"><img src="/productimage/{{$item->image}}" alt="" style="height:300px;"></a>
                                    <div class="down-content">
                                        <a href="#"><h4>{{$item->title}}</h4></a>
                                        <h6>Rp {{$item->price}}</h6>
                                        <p>{{$item->description}}</p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half"></i></li>
                                        </ul>
                                        <span>quantity ({{$item->quantity}})</span>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                            @endif
                         </div>
                    </div>
                </div>
                {{-- product --}}
    </div>

    {{-- <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-md-8">
                                <h4><em>Upload</em> Products</h4>
                                <p>DISINI DULU UPLOAD PRODUCT YE</p>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('uploadproduct') }}" class="filled-button">UPLOD</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection('content')
