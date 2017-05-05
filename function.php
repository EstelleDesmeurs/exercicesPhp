<?php

$chaine = 'Cette chaine va etre melangee !';
$chaine = str_shuffle($chaine);
echo $chaine."<br>";

$chaine = ' Cette chaine va etre melangee !';
$chaine = strrev($chaine);
echo $chaine."<br>";

$chaine = 'Cette chaine va etre melangee !';
$chaine = strlen($chaine);
echo $chaine."<br>";

$nom = "emile";
$nom = ucfirst($nom);
echo $nom."<br>";

echo date('Y');
echo date('H:i:s')."<br>";



$a=1;
$b=2;
function somme() {
    global $a, $b;
    $b = $a + $b;
}
echo $b;

// Ou:
function addition($a, $b) {
    if (is_numeric($a) and is_numeric($b)) {
        $result = ($a + $b);
        echo $result;
    }
    else  {
        echo "erreur";
    }
}
addition(3,2);

// Tout en majuscule OU tout en minuscule:
$chaine="Créer un Site";
echo strtolower($chaine);
echo strtoupper($chaine);


$chaine="Crée une fonction prenant deux arguments numériques et qui retourne la somme de ces deux arguments";
$chaine= ucwords($chaine);
echo $chaine."<br>";

$chaine2 = "caecotrophie chaenichthys microsphaera sphaerotheca";
$vowels = str_replace("ae", "æ", $chaine2);
echo $vowels."<br>";

$chaine3= "cæcotrophie, chænichthys, microsphæra, sphærotheca";
$v= str_replace("æ", "ae", $chaine3);
echo $v."<br>";
/*
$chaine3= "cæcotrophie, chænichthys, microsphæra, sphærotheca";
$v= str_replace("æ", "ae", $chaine3);
echo $v/"<br>";
$text="ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!";
echo strlower($text)."<br>";
//??????!!!! ==> "NAN" = Not A Number.
*/
$text="ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!";
echo strtolower($text)."<br>";

?>