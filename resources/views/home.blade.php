<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Clément Devidas</title>
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
    <div id="body-main">
        <main class="wrapper">
            <div id="ident">
                <h1>Développeur web </h1>
                <h2>Clément Devidas</h2>
            </div>
            <div id="comp">
                <h2>Ce que je peux faire pour vous :</h2>
                <div id="desc">
                    <div class="desc-part left">
                        <ul>
                            <li>CSS</li>
                            <li>HTML</li>
                            <li>Javascript</li>
                            <li>Typescript</li>
                            <li>PHP</li>
                            <li>Angular</li>
                            <li>Laravel</li>
                            <li>Node.js</li>
                        </ul>
                    </div>
                    <div class="desc-part right">
                        <ul>
                            <li>Maquettage/prototypage</li>
                            <li>Responsive</li>
                            <li>Dynamique</li>
                            <li>Base de données</li>
                            <li>API</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="real">
                <div>
                    <h3>Mes réalisations</h3>
                </div>
                <div>
                    <div><a href="https://atlas-inway.in"><img src="" alt=""></a></div>
                    <div><p>atlas-inway</p></div>
                </div>
            </div>
        </main>
    </div>
        
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