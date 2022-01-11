<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>GO-BLOX</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <script src="https://kit.fontawesome.com/4488f97f35.js" crossorigin="anonymous"></script>

  </head>

  <body>

    @include('inc.adminnavbar')
    <!-- Page Content -->

    <div class="container-fluid page-body-wrapper">
        <div class="container" style="align:center">
            <h1 class="title" style="padding-top: 100px;">Add Product</h1>

            @if(session()->has('message'))

            <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert">x</button>

            {{ session()->get('message') }}

            </div>

            @endif

            <form action="{{ url('newproduct') }}" method="post" enctype="multipart/form-data">

                @csrf

            <div style="padding: 15px;">

                <label style="display: inline-block;width: 200px;">Product name</label>
                <input style="color:black;" type="text" name="title" placeholder="Give a product title" required="">

            </div>

            <div style="padding: 15px;">

                <label style="display: inline-block;width: 200px;">Price</label>
                <input style="color:black;" type="number" name="price" placeholder="Give a price" required="">

            </div>

            <div style="padding: 15px;">

                <label style="display: inline-block;width: 200px;">Description</label>
                <input style="color:black;" type="text" name="des" placeholder="Give a description" required="">

            </div>

            <div style="padding: 15px;">

                <label style="display: inline-block;width: 200px;">Quantity</label>
                <input style="color:black;" type="number" name="quantity" placeholder="Product Quantity" required="">

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

    {{-- Footer --}}
    @include('inc.footer')

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
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>

