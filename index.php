<?php

/**
 * 1. Générez un nombre aléatoire compris entre 0 et 50, affichez le avec echo dans un nouveau <div>.
 */

// TODO Votre code ici.
$aleas = rand(0, 50);
echo $aleas;
echo "<br>";
/**
 * 2. Générez un nombre aléatoire compris entre 50 et getrandmax, affichez le résultat dans un nouveau <p>
 */

// TODO Votre code ici.
$aleas = rand(50, getrandmax());
echo $aleas;
echo "<br>";
/**
 * 3. Générez un nombre aléatoire compris entre 0 et 50
 * ==> si le nombre est inférieur ou égal à 25, affichez : vous avez gagné ( dans un nouveau <p> )
 * ==> si ce n'est pas le cas, affichez : vous avez perdu ( dans un nouveau <p> )
 */

// TODO Votre code ici.
$aleas = rand(0, 50);
if($aleas <= 25){
    echo "vous avez gagné";
}
else {
    echo "vous avez perdu";
}
echo "<br>";
/**
 * 4. Créez une fonction qui génère un nombre aléatoire compris entre $max et $min ( paramètres ).
 * ==> Si le nombre est compris entre $max et $max -100, regénérez un nouveau nombre avec un appel récursif.
 * ==> Si ce n'est pas le cas, retournez tout simplement le nombre généré.
 */

// TODO Votre code ici.
function createAlea ($max, $min){
    $result = rand($max, $min);

    if($result > ($max - 100)){
        createAlea($max, $min);
    }
    else {
        return $result;
    }
}

echo createAlea(150, 0);
