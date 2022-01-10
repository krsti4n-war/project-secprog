<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <script src="https://kit.fontawesome.com/4488f97f35.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="admin/style.css">

</head>

<body>
    
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="/">
                        <span class="icon"><i class="fas fa-gamepad"></i></span>
                        <span class="title"><h2>ToyStore</h2></span>
                    </a>
                </li>
                {{-- <li>
                    <a href="/">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('uploadproduct') }}">
                        <span class="icon"><i class="fas fa-plus"></i></span>
                        <span class="title">Add Products</span>
                    </a>
                </li>
                <li>
                    <a href="/">
                        <span class="icon"><i class="fas fa-money-bill-wave-alt"></i></span>
                        <span class="title">Payment Verifications</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu();"></div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="search">
                        <i class="fas fa-search"></i>
                    </label>
                </div>
                    <x-app-layout>
                    </x-app-layout>
                {{-- <div class="user">
                    <img src="../admin/admin.png">
                </div> --}}
            </div>

            {{-- <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">11,25 M</div>
                        <div class="cardName">Daily Visitors</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">600 B</div>
                        <div class="cardName">Sales</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"> $50.000</div>
                        <div class="cardName">Earnings</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-tags"></i>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <script>

        function toggleMenu()
        {
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

    </script>

</body>

</html>