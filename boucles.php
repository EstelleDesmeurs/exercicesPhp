<?php

$pronomsPersonnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
foreach ($pronomsPersonnels as $n) {
    echo "<br>".$n;
        if ($n == "Je" or $n == "Il/Elle") {
            echo " code.";
        }
        elseif ($n == "Tu") {
            echo " codes.";
        }
        elseif ($n == "Nous") {
            echo " codons.";
        }
        elseif ($n == "Vous") {
            echo " codez.";
        }
        elseif ($n == "Elles/Ils") {
            echo " codent.";
        }
}

$nbLigne= 1;

while ($nbLigne <121) {
    echo $nbLigne."<br>";
    $nbLigne++;
}

for ($nbLigne=1; $nbLigne<121; $nbLigne++) {
    echo $nbLigne."<br>";
}

$classe = array ('thomas', 'ludo', 'geoffrey', 'Kreshnik', 'Eric', 'Nadia', 'David', 'Santiago', 'Daniela');
foreach ($classe as $prenom) {

    echo ucfirst($prenom);
}


for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}

$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100)
{
    echo $nombre_de_lignes . ': Je ne dois pas regarder les mouches voler quand japprends le PHP.<br />';
    $nombre_de_lignes++; // équivaut à écrire $nombre_de_lignes = $nombre_de_lignes +1;
}


$pays = array ("Inde", "Russie", 'Australie', 'Suède', 'Brésil', 'Chili', 'Turquie', 'Madagascar', 'Islande', 'Groenland');
function selector($x) {
    foreach ($x as $value) {
        echo ("<option value=".$value.">".$value."</option>");
        }
}    
    echo ("<select>");
    echo selector($pays);
    echo ("</select>");

$pays2 = array ('IN' => "Inde", 'RU' => "Russie", 'AU'=>'Australie', 'SU'=>'Suède', 'BR'=>'Brésil', 'CH'=>'Chili', 'TU'=>'Turquie', 'MA'=>'Madagascar', 'IS'=>'Islande', 'GR'=>'Groenland');
function slector ($y) {
    foreach ($y as $key => $value) {
        echo ("<option value=".$key.">".$key."</option>");
    }
}
    echo ("<select>");
    echo slector($pays2);
    echo ("</select>");

  
?>    