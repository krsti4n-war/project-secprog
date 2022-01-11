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

                                            {{-- @if(Auth::id()) --}}
                                            <form action="{{ url('addcart',$item->id) }}" method="POST">

                                                @csrf

                                                <input class="btn btn-danger" type="submit" value="Delete item">

                                            </form>
                                            {{-- @endif --}}
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
