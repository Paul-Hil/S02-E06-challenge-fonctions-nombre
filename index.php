<?php 
/* Ton code commence ici :) */

$number = $_GET["number"];
$devise = $_GET["devise"];

function getAmountInDollars() {
    $numberToConvert = $_GET["number"];
    $amountInDollars = $numberToConvert * 1.14;

    return $amountInDollars;
}

function getAmountInYens() {
    $numberToConvert = $_GET["number"];
    $amountInYens = $numberToConvert * 126;

    return $amountInYens;
}

/// Exercice Bonus : Conversion générique

function getConvertedAmount() {
    $number = $_GET["number"];
    $devise = $_GET["devise"];


    if ($devise == "dollars") {
        $amountInDollars = $number * 1.14;
        return $amountInDollars;
    }

    elseif ($devise == "yens") {
        $amountInYens = $number * 126;
        return $amountInYens;
    }

    else 
        $amountInPeso = $number * 33.18;
        return $amountInPeso;

}

echo "Montant en euros: " . $_GET["number"] . " €<br>";

echo "Montant en dollars: " . $dollar = getAmountInDollars() . " $<br>";

echo "Montant en yens: " . $yens = getAmountInYens() . " Yens<br>";

echo "<h4>Conversion Générique :</h4>Montant convertis dans la devise souhaitée: " . $montant = getConvertedAmount() . " " . $devise . "<br>";


/// Exercice Bonus : Est pair et impair

function isEven() {
    $number = $_GET["number"];
    echo "Nombre: " . $number . " ";
    $number %= 2;

    if($number == 0) {
        return true;
    }

    else 
        return false;
}

function isOdd() {
    $number = $_GET["number"];
    echo "Nombre: " . $number . " ";
    $number %= 2;

    if ($number == 0) {
        return false;
    } else {
        return true;
    }
}

if(isEven(true)) {
    echo "True ! Le nombre est pair<br>";
}

else 
    echo "False ! Le nombre est impair<br>";


if(isOdd(true)) {
    echo "True ! Le nombre est impair";
}
    
else {
    echo "False ! Le nombre est pair";
}

echo "<h4>Plus petit chiffre</h4>";


/// Exercice Méga Bonus : Plus petit chiffre

function getPlusPetitChiffre() {
    $number = $_GET["number"];
    $splitOne = str_split($number);

    echo "<br>" . min($splitOne);
}

getPlusPetitChiffre();


/// Exercice Méga Bonus : Conversion en binaire

function getConvertedBinary() {
    $number = $_GET["number"];
    echo "Représentation binaire: " . decbin($number);
}

echo "<h4>Convertisseur Binaire</h4>";

getConvertedBinary();


/// Exercice Bonus : Est premier

echo "<h4>Est premier</h4>";
function getIsPrime() {
    $number = $_GET["number"];
    //boucle de 2 au nombre à tester
    for ($i = 2; $i < $number; $i++) {
        //test du qutotien de la division
        if ($number % $i == 0) {
            return FALSE;
        }
    }
    //Aucun diviseur trouvé, c'est un nombre premier
    return TRUE;
}

if(getIsPrime(true)) {
    echo $number . " est un nombre premier !";
}

else
    echo $number . " n'est pas un nombre premier !";