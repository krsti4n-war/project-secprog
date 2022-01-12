
@extends('layout.app')

@section('content')
    <!-- Page Content -->
    <div class="container-fluid page-body-wrapper">
        <div class="container" style="align:center">
            <h1 class="title" style="padding-top: 100px;">Upload Your Payment Receipt here</h1>

            <form action="{{ url('sendpayment') }}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding: 15px;">

                    <label style="display: inline-block;width: 200px;">Payment Id</label>
                    <input style="color:black;" type="text" name="payID" placeholder="Give a product title" required="">

                </div>

                <div style="padding: 15px;">

                    <input type="file" name="file">

                </div>

                <div style="padding: 15px;">

                    <input class="btn btn-success" type="submit">

                </div>
            </form>
        </div>
    </div>
@endsection('content')
