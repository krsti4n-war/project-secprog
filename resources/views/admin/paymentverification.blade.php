
@extends('layout.adminapp')

@section('content')
    <!-- Page Content -->
    <div class="col-md-12" style="padding-top: 10vh">
        <div class="filters-content">
            <div class="row grid">
                @if(count($products) > 0)
                @foreach($products as $item)
                <div class="col-lg-4 col-md-4 all des">

                    <div class="product-item">
                        <a href="#"><img src="/payment_receipt_dir/{{$item->image}}" alt="" style="height:300px;"></a>
                        <div class="down-content">
                            <a href="#"><h4>{{$item->payment_id}}</h4></a>
                            {{-- <form action="{{ url('addcart',$item->id) }}" method="POST">

                                @csrf

                                <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">

                                <br>

                                <input class="btn btn-primary" type="submit" value="Add to Cart">

                            </form> --}}
                        </div>
                    </div>

                </div>
                @endforeach
                @endif
             </div>
        </div>
    </div>
@endsection('content')
