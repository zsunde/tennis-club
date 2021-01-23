@php

$currentUser = \Auth::user();

@endphp

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tennis Club</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Tennis club</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('members.index')}}">Members</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('countries.index')}}">Countries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cities.index')}}">Cities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('addresses.index')}}">Addresses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('courts.index')}}">Courts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('court_reservation.index')}}">Court reservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('matches.index')}}">Matches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('match_results.index')}}">Match results</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('set_results.index')}}">Set results</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('roles.index')}}">Roles</a>
                </li>
            </ul>
            @auth
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="nav-user" role="button" data-toggle="dropdown">
                Welcome {{ $currentUser->name }}<small> ({{ $currentUser->role->name }})</small>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('members.show', ['member' => $currentUser->id]) }}">My profile</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </div>
            </li>
        </ul>
        @endauth
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    <style>
        /* temporarily here */
        body { padding-bottom: 10vh; }
        footer {
            left: 0;
            bottom: 0;
            height: 8vh;
            z-index: 100;
        }
    </style>

    <script>
        /* temporarily here */
        function areYouSure(ev) {
            if(confirm('Are you sure you?')){
                return true;
            }
            ev.preventDefault();
            return false;
        }
    </script>
    <footer class="bg-light w-100 text-center position-fixed pt-3">
        <small>Powered by <a href="https://www.google.com/search?q=zapravo prevara" target="_blank">Kizo</a></small>
    </footer>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>

</html>
