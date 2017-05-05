<?php

$famille = array('Père', 'Mère', 'Frère', 'Etc');
print_r ($famille);

$platsPreferes = ['agneau', 'poisson', 'blablabla'];
print_r ($platsPreferes);

$filmsFavoris = ['Persona', 'Le Sacrifice', 'Utopia'];
echo $filmsFavoris[0];

$associatif = [
    'prenom' => 'E',
    'nom' => 'D',
    'numero' => 01111333 ,
    'etudiante' => true ,
];
echo $associatif['nom'];
echo $associatif['etudiante'];
echo $associatif['numero'];

$moi = array(
	'naissance'	=> 1991 , 
	'prenom' 		=> 'Estelle' ,
	'nom' 	  		=> 'Desmeurs' ,
	'hobbies' 	=> array('ciné', 'bricolage', 'cuisine'),
    'papa' => ($papa= array(
	'naissance'	=> 1982 , 
	'prenom' 		=> 'Julien' ,
	'nom' 	  		=> 'B' ,
	'hobbies' 	=> array('jardinage', 'bricolage', 'cuisine')))
);

array_push ($moi['hobbies'], 'taxidermie');
$moi['nom'] = 'dieudonné';

echo '<pre>';
print_r($moi);
echo '</pre>';

echo count($moi);

$web_development array (
        'frontend'=> array()
        'backend' => array()
);





?>