<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SMSBleu</title>

        <!-- JS -->
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/alertify.js') }}"></script>
        <script src="{{ asset('js/fontawesome.js') }}"></script>

        <!-- Styling -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/alertify.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark" style="background: #032cfc">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">SMS<strong>B</strong>leu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        @guest
                        <a href="{{ route('login') }}"><button class="btn btn-outline-light">Login</button></a>
                        <a href="{{ route('register') }}"><button class="btn btn-outline-light"
                                style="margin-left: 5px">Register</button></a>
                        @endguest
                        @auth
                        <a href="{{ route('logout') }}"><button
                                class="btn btn-danger btn-outline-light">Logout</button></a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')

        @if(session('success'))
        <script>
            alertify.success("{{ session('success') }}");
        </script>
        @endif
        @if(session('error'))
        <script>
            alertify.error("{{ session('error') }}");
        </script>
        @endif
        @if(session('popup'))
        <script>
            alertify.alert('Notification', "{{ session('popup') }}");
        </script>
        @endif
    </body>

</html>