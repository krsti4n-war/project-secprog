
@extends('layout.adminapp')
@section('content')
<!-- Page Content -->

    <div class="edit-products">
        <div class="container">
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

                                            <form action="{{ url('deleteproduct',$item->id) }}" method="POST">

                                                @csrf
                                                <input class="btn btn-danger" type="submit" value="Delete item">

                                            </form>
                                            </div>
                                        </div>
                                </div>
                            @endforeach
                            @endif
                            </div>
                        </div>
                  </div>
            {{-- product --}}

    {{-- Footer --}}
@endsection('content')
