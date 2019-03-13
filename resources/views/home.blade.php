<?php
use Illuminate\Support\Facades\Auth;
?>

@include('includes.head')

<body>
@include('includes.header') 

    <div id="main">
        <img src={{ asset('images/fond.jpg') }} alt="nice" class="img-fluid" id="fond">
            @if (Auth::check()) 
                <a class="nav-link" id = "Bonjour"> <strong>Bonjour {{ Auth::user()->username }}</strong> </a>
                <a class="nav-link" id = "Statut"> <strong>Vous êtes connecté en tant que {{ Auth::user()->statut }}</strong> </a>
            @endif
    </div>

    <!-- fin du body -->
@include('includes.footer')
</body>