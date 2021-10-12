<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Prise de contact sur le site portFolio de Clément Devidas</h2>
    <p>Informations d'envoie :</p>
    <ul>
      <li style="color:blue"><strong style="color: red">Nom</strong> : {{ $contact['nom'] }}</li>
      <li style="color:red"><strong style="color: green">Email</strong> : {{ $contact['email'] }}</li>
      <li style="color:green"><strong style="color: blue">Message</strong> : {{ $contact['message'] }}</li>
    </ul>
  </body>
</html>