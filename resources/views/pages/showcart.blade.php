@extends('layout.app')

@section('content')

<div style="padding:100px;" align="center">
    <table>
        <tr>
            <td style="padding:10px; font-size: 20px;">Product Name</td>
            <td style="padding:10px; font-size: 20px;">Quantity</td>
            <td style="padding:10px; font-size: 20px;">Price</td>
            <td style="padding:10px; font-size: 20px;"></td> <!--Action delete product dari showcart -->
        </tr>

    <form action="{{ url('order') }}" method="POST">

        @csrf

@foreach($cart as $carts)

        <tr>
            <td style="padding:10px;">
                <input type="text" name="productname[]" value="{{ $carts->product_title }}" hidden>
                {{ $carts->product_title }}
            </td>
            <td style="padding:10px;">
                <input type="text" name="quantity[]" value="{{ $carts->quantity }}" hidden>
                {{ $carts->quantity }}
            </td>
            <td style="padding:10px;">
                <input type="text" name="price[]" value="{{ $carts->price }}" hidden>
                {{ $carts->price }}
            </td>
            <td style="padding:10px;"><a class="btn btn-danger" href="{{ url('delete',$carts->id) }}">Delete</a></td>
        </tr>

@endforeach

    </table>

    <br>

    <button class="btn btn-success">Checkout</button>

    </form>

</div>

    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-md-8">
                                <h4><em>Upload</em> Bukti Pembayaran</h4>
                                <p>Silahkan upload foto bukti pembayaran disini</p>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('uploadproduct') }}" class="filled-button">UPLOAD</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection('content')
