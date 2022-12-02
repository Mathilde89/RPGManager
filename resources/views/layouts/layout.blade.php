<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header>
        <nav>
            <ul class="nav-bar">
                <img id="logo" src="data:image/jpeg;base64,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" alt="" >
                @if(!auth()->check())

                    <li> <a class="contenue" href="/inscription">Inscription</a> </li>
                    <li> <a class="contenue" href="/connexion">Connexion</a> </li>

                 @else
                     <li> <a href="/allperso">Les personnages</a> </li>
                     <li> <a href="/personnage">Mes personnages</a> </li>
                     <li> <a href="/groupe">Groupe</a> </li>
                     <li> <a href="/deconnexion">Deconnexion</a> </li>
                    
                     <li> <a class="contenue" href="/personnage{}">Mes personnages</a> </li>
                     <li> <a class="contenue" href="/groupe">Groupe</a> </li>
                     <li> <a class="contenue"href="/deconnexion">Deconnexion</a> </li>


                @endif 

                
            </ul>
        </nav>
    </header>

    @yield('inscription')
    @yield('connexion')
    @yield('groupe')
    @yield('listgroupe')
    @yield('editgroupe')
    @yield('formaddperso')
    @yield('showPerso')
    @yield('listallperso')
</body>
</html>