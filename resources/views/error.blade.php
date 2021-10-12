<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <header id="header">
        <div class="wrapper">
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('portfolio') }}">PortFolio</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div id="body-main">
        <div class="wrapper">
            <main>
                <div id="messageError">
                    <h1>Erreur 404</h1>
                    <p>Il semblerait que vous vous soyez égaré.</p>
                    <span id="nothing">
                        <p>Vous pouvez rester ici si vous le souhaitez, mais il n'y a pas grand chose à voir...</p>
                    </span>
                </div>
            </main>
        </div>

    </div>
    <footer id="footer">
        <div class="wrapper">
            <ul>
                <li>&copy; Clément Devidas</li>
                <li><a href="{{ url('mentions') }}">Mentions légales</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
