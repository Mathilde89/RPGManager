<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                
                @if(!auth()->check())

                    <li> <a href="/inscription">Inscription</a> </li>
                    <li> <a href="/connexion">Connexion</a> </li>

                 @else
                     <li> <a href="/personnage">Mes personnages</a> </li>
                     <li> <a href="/groupe">Groupe</a> </li>
                     <li> <a href="/deconnexion">Deconnexion</a> </li>


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
</body>
</html>