<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
</head>
<body>
    <header id="header">
        <div class="wrapper">
            <nav>
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('portfolio')}}">PortFolio</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
@yield('body')
    <footer id="footer">
        <div class="wrapper">
                <ul>
                    <li>&copy; Clément Devidas</li>
                    <li><a href="{{url('mentions')}}">Mentions légales</a></li>
                </ul>
        </div>
    </footer>

</body>
</html>