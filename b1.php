<?php

$pays = array('Inde', 'Russie', 'Australie', 'Suède', 'Brésil', 'Chili', 'Turquie', 'Madagascar', 'Islande', 'Groenland');

function slector($x) {
    foreach ($x as $key => $value) {
        echo ("<option value=" .$value.">" .$value. "</option>");
        }
}    
    echo ("<select>");
    echo selector($pays);
    echo ("</select>");

$pays = array('Belgique','France','Luxembourg','Pays-Bas','Angleterre','Italie','Espagne','Portugal', 'Albanie', 'Chili' );

function selector($x) {
foreach ($x as $key => $value) {

echo ("<option value=" .$value.">" .$value. "</option>");

}
}

echo ("<select>");
echo selector($pays);
echo ("</select>" );

  

?>