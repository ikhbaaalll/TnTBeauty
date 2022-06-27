<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/home.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>TnT Beauty</title>
    <style>
        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }
    </style>
    @yield('css')
</head>

<body style="background-color: #5242A4;">
    <nav class="navbar navbar-light justify-content-between p-4 sticky-top" style="background-color: #5242A4;">
        <a class="navbar-brand text-light">TnT <b>Beauty</b></a>
        <div class="list-inline">
            <a href="/#home" class="list-inline-item text-light">Home</a>
            <a href="/#aboutus" class="list-inline-item mx-3 text-light">About Us</a>
            <a href="/#features" class="list-inline-item mx-3 text-light">Features</a>
            <a href="/#contact" class="list-inline-item mr-3 text-light">Contact</a>
        </div>
        {{-- <ul class="nav navbar-nav list-inline">
            <li class="list-inline-item nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="list-inline-item nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="list-inline-item nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
        </ul> --}}
    </nav>
    <div class="container">
        @yield('content')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    @yield('js')
</body>

</html>
