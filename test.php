<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="test.php" method="get">
 <p>Quel est votre âge?<input type="number" name="age" id="age"><br>
 <label>Homme ou femme?</label> : <br>
       <input type="radio" name="genre" value="homme" id="homme"><label for="homme">Homme</label><br>
       <input type="radio" name="genre" value="femme" id="femme"><label for="femme">Femme</label><br>        
</p>       
  <?php
if ($_GET['age'] and $_GET['genre']){
    $age=$_GET['age'];
    $genre=$_GET['genre'];
    
    if ($age < 12 and $genre=="homme") {
    echo "salut petit!";
    }
    elseif ($age < 12 and $genre=="femme") {
    echo "salut petite!";
    }
    elseif ($age >= 12 and $age <= 18 and $genre=="homme") {
        echo "salut l'ado";
    }   
    elseif ($age >= 12 and $age <= 18 and $genre=="femme") {
        echo "salut l'adoE";
    }               
    elseif ($age > 18 and $age < 115 and $genre=="homme") {
        echo "salut l'adulte homme";
    }
        elseif ($age > 18 and $age < 115 and $genre=="femme") {
        echo "salut l'adulte femme";
    }
    elseif ($age >= 115 and $genre=="homme") {
        echo "Wow t'es toujours vivant?!";
    }
    elseif ($age >= 115 and $genre=="femme") {
        echo "Wow t'es toujours vivante?!";
    } 
}
?>    

    <p>Quelle note avez-vous obtenu?<input type="number" name="note" id="note"></p>

<?php 
    
if($_GET['note']) {
$note=$_GET['note'];
    switch ($note) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:    
            echo "Ce travail est nul";
            break;
        case 6:
        case 7:
        case 8:
        case 9:    
            echo "Ce travail n'est pas terrible";
            break;
        case 10:
            echo "Tout juste!";
            break;
        case 11:
        case 12:
        case 13:
        case 14:    
            echo "C'est pas mal";
            break;
        case 15:
        case 16:
        case 17:
        case 18:    
            echo "Bravo!";
            break;
        case 19:
        case 20:    
            echo "Police! Arrêtez ce tricheur!";
            break;
    }
}


if ($_GET['age'] and $_GET['genre']){
    $age=$_GET['age'];
    $genre=$_GET['genre'];  
    if ($age >= 21 and $age <= 40 and $genre=="femme") {
        echo "Bonjour, bienvenue parmi nous!";
    }
    if ($genre=="homme" or ($genre=="femme" and $age<21) or ($genre=="femme" and $age>40)) {
        echo "Désolé, vous ne remplissez pas les critères de sélection.";
    }
}



echo $bonjour; 
    
$tableau= array(0 => 'D', 1 => 'Jean', 2 => 'L', 3 => 'C', 4 => '', 5=>'E');  
    print_r($tableau);


?>  
   <br><input type="submit">  
    </form>
</body>
</html>
     

