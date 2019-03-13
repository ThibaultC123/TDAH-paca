<nav class="navbar navbar-expand-md navbar-dark bg-dark static-top" id="test">
    <div class="container">
        <div id="rect-1">
            <a href="{{ route('home') }}"><img src={{ asset('/images/logo.PNG') }} alt="logo" id="logo"></a>
        </div>
    </div>
</nav>
 
<nav>
    <ul>
        <li class="menu_accueil"><a href="{{ route('home') }}">Accueil</a></li>
            
        <li class="menu_events"><a href="#">Evenements</a>
            <ul class="sous_menu">
                <li><a href="{{ route('calendar') }}">Calendrier</a></li>
                <li><a href="{{ route('JM') }}">Journées méditerranéennes du TDAH</a></li>
                <li><a href="{{ route('conferences') }}">Conférences</a></li>
                <li><a href="{{ route('congres') }}">Congrès</a></li>
                <li><a href="{{ route('ateliers') }}">Ateliers</a></li>
            </ul>
        </li>
            
        <li class="menu_tdah"><a href="#">Le TDAH</a>
            <ul class="sous_menu">
                <li><a href="{{ route('parents') }}">Le TDAH expliqué aux parents</a></li>
                <li><a href="{{ route('profs') }}">Le TDAH expliqué aux enseignants</a></li>
            </ul>
        </li>
            
        <li class="menu_publications"><a href="#">Publications</a>
            <ul class="sous_menu">
                <li><a href="{{ route('presse') }}">Articles de presse</a></li>
                <li><a href="{{ route('scientifiques') }}">Articles scientifiques</a></li>
                <li><a href="{{ route('posters') }}">Posters</a></li>
            </ul>
        </li>
            
        <li class="menu_contact"><a href="#">Contact</a>
            <ul class="sous_menu">
                <li><a href="{{ route('membres') }}">Les membres de l'association</a></li>
                <li><a href="{{ route('formulaire') }}">Formulaire de contact</a></li>
            </ul>
        </li>

        <li class="dons"><a href="{{ route('dons') }}">Faire un don</a></li>

        <li class="boutique"><a href="{{ route('index') }}">Boutique</a></li>
                
        <li class="menu_compte"><a href="#">Mon compte</a>
            <ul class="sous_menu">
                @if (Auth::check())
                    <li><a href="{{ route('shoppingCart') }}">Panier</a></li>
                    <li><a href="{{ route('logout') }}">Déconnexion</a></li>
                @else
                    <li><a href="{{ route('login') }}">Connexion</a></li>
                    <li><a href="{{ route('register') }}">Inscription</a></li>
                @endif
            </ul>
        </li>
    </ul>
</nav>
   