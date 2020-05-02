<!DOCTYPE html>
<html lang="fr">
 <head>
 <meta charset="utf-8">
 </head>
 <body>
 @isset($membre['type_membre'])
 @if ($membre['type_membre']==='benevole')
    <h2>Demande de  benevolat</h2>
@elseif ($membre['type_membre'] === 'membre')
	<h2>Demande d'adhésion à Jadd Cameroon </h2>
@endif
 @endisset

 <p>Informations du postulant
:</p>
 <ul>
 <li><strong>Noms</strong> : {{ $membre['noms'] }}</li>
 <li><strong>Email</strong> : {{ $membre['email'] }}</li>
 @isset($membre['qualification'])
 	<li><strong>Qualification</strong> : {{ $membre['qualification'] }}</li>
  @endisset
  <li><strong>Date et Lieu de naissance</strong> : {{ $membre['date_de_naissance'] }} à {{ $membre['lieu_de_naissance'] }}</li>
 </ul>
 <img src="assets/img/logo1.png">
 </body>
</html>
