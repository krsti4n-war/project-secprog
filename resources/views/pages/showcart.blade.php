@extends('layout.app')

@section('content')

<div style="padding:100px;" align="center">
    <table>
        <tr>
            <td style="padding:10px; font-size: 20px;">Product Name</td>
            <td style="padding:10px; font-size: 20px;">Quantity</td>
            <td style="padding:10px; font-size: 20px;">Price</td>
        </tr>

@foreach($cart as $carts)

        <tr>
            <td style="padding:10px;">{{ $carts->product_title }}</td>
            <td style="padding:10px;">{{ $carts->quantity }}</td>
            <td style="padding:10px;">{{ $carts->price }}</td>
        </tr>

@endforeach

    </table>
</div>

@endsection('content')
