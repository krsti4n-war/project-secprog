 <header class="">
      <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('adminpanel') }}"><h2>ADMIN <em>GO-BLOX</em></h2></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('adminpanel') }}">Product List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('uploadproduct') }}">Upload Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('paymentverification') }}">Payment Verification</a>
                        </li>
                    </ul>
                </div>
            </div>
      </nav>
</header>
