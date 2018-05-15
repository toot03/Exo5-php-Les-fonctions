<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo 5</title>
</head>
<body>
<?php
//exo 1
echo "exo1<br>";
$var=4;
function control($var){
    if($var==4){
        return true;
    }
    else{
        return false;
    }
}
echo control($var);

//exo2
echo "<br>exo2<br>";
$frase="le PHP c'est bien";
function chaine($frase){
    return $frase;
}
echo chaine($frase);

//exo 3
echo "<br>exo 3<br>";
$frase1="le javascript c'est bien";
$frase2="mais pas plus que le PHP";
function frase3($frase1,$frase2){
    return "$frase1, $frase2";
}
echo frase3($frase1,$frase2);

//exo 4
echo"<br>exo 4<br>";
$num1=3;
$num2=17;
function math($num1,$num2){
    if($num1==$num2){
        return "Les deux nombres sont identiques";
    }
    else if($num1<$num2){
        return "Le premier nombre est plus petit";
    }
    else{
        return "Le premier nombre est plus grand";
    }
}
echo math($num1,$num2);

//exo 5
echo "<br>exo 5<br>";
$num=1995;
$frase="je suis né en ";
function addit($num,$frase){
    return $frase. $num;
}
echo addit($num,$frase);

//exo 6
echo"<br>exo 6<br>";
$nom="Owsinski";
$prenom="Théo";
$age=23;
function ensemble($nom,$prenom,$age){
    return "Bonjour " .$nom." " .$prenom. ", tu as " .$age. " ans";
}
echo ensemble($nom,$prenom,$age);

//exo 7
echo"<br>exo 7<br>";
$age=23;
$genre="homme";
function genreage($age,$genre){
    if($genre=="homme" and $age>=18){
        return "Vous êtes un homme et vous êtes majeur";
    }
    else if($genre=="homme" and $age<18){
        return "Vous êtes un homme et vous êtes mineur";
    }
    else if($genre=="femme" and $age>=18){
        return "Vous êtes une femme et vous êtes majeur";
    }
    else{
        return "Vous êtes une femme et vous êtes mineur";
    }
}
echo genreage($age,$genre);

//exo 8
echo"<br>exo 8<br>";
$num1=5;
$num2=10;
$num3=15;
function calcul($num1,$num2,$num3){
    $somme=$num1+$num2+$num3;
    return $somme;
}
echo calcul($num1,$num2,$num3);
?>
</body>
</html>