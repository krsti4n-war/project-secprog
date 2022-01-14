@extends('layout.app')

@section('content')
    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>BELI DIBELI</h4>
              <h2>BELI 1 BAYAR 2, <br>TOLONG INI BUKAN GORENGAN</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
        <div class="container">
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
                                        <span>quantity ({{$item->quantity}})</span>

                                @if(Auth::id())
                                        <form action="{{ url('addcart',$item->id) }}" method="POST">

                                            @csrf

                                            <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">

                                            <br>

                                            <input class="btn btn-primary" type="submit" value="Add to Cart">

                                        </form>
                                    @endif
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
    </div>
@endsection('content')
