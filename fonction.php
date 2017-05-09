<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
<div class="warning">
<?php

    function feedback($x, $y ="info"){
        return $y;
    }
    
echo feedback("adresse email incorrecte", "warning");
?>

</div>
  
<?php

$input = array("quae", "laudantium", "adipisci", "Error", "rerum", "facere", "perspiciatis", "iusto", "consequuntur");
$rand_keys = array_rand($input, 2);
    function get_random_elements($input, $lim=2) {
        shuffle($inpput);
            
            if ($lim < 5) {
                $input = array_splice($input, 5, $lim);
            }
        return $input;
        echo $input[$rand_keys[0]] . "\n";
        echo $input[$rand_keys[1]] . "\n";
    }
    /*
        echo $input[$rand_keys[0]] . "\n";
        echo $input[$rand_keys[1]] . "\n";
    }
    */
?>

</body>
</html>