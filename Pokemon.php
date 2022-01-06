<?php

$pv = 30;

$pvEnnemy = 30;


function ifPvIsUnder0($pvMe, $pvOther){

    if($pvMe > 0 && $pvOther > 0){
        return true;
    } else {
        return false;
    }

}

while(ifPvIsUnder0($pv, $pvEnnemy)) {

    $action = (int)readline('Entrez votre attaque: (1: boule de feu, 2: pistolet a eau, 3: fouet liane)');

    $randomNumber = rand(1, 3);

critChance($action,$randomNumber,$pv,$pvEnnemy);

    if ($randomNumber === 3 && $action === 2) {
        echo 'l ennemi vous à contrer en lancant une attaque fouet liane vous perdez 1 pv !';
        $pv -= 1;
    } elseif ($randomNumber === 2 && $action === 1) {
        echo 'l ennemi vous à contrer en lancant pistolet à eau vous perdez 1 pv ';
        $pv -= 1;
    } elseif ($randomNumber === 1 && $action === 3) {
        echo 'l ennemi vous à contrer en lançant boule de feu vous perdez 1 pv ';
        $pv -= 1;
    } elseif ($randomNumber === 3 && $action === 1) {
        echo 'L\'ennemi lance fouet lianes vous remporter la manche l\'ennemi perd 1pv  !!! ';
        $pvEnnemy -= 1;
    } elseif ($randomNumber === 2 && $action === 3) {
        echo 'L\'ennemi lance pistolet à eau vous remporter la manche l\'ennemi perd 1pv  !!! ';
        $pvEnnemy -= 1;
    } elseif ($randomNumber === 1 && $action === 2) {
        echo 'L\'ennemi lance boule de feu vous remportez la manche l\'ennemi perd 1pv !!! ';
        $pvEnnemy -= 1;

    } elseif ($randomNumber === $action) {
        echo 'Attaque du même type, annulation !!!';

    } else {
        echo 'erreur vous ne pouvez pas effectuer cette action ';
    }

    echo "il vous reste $pv pv \n ";
    echo " et il reste $pvEnnemy pv à l'adversaire !!! ";

    if ($pv == 0){
        echo 'L\'Ennemie remporte le combat !!! =-( ';
    }else if ($pvEnnemy == 0){
        echo 'Vous remportez le combat !!! ';
    }

}






function critChance($attack, $ennemyAttack,$life,$lifeEnnemy){

$chance = rand (1,2);
if ($attack > 0 && $chance === 2){
    $lifeEnnemy -= 2;
}else if ($ennemyAttack > 0 && $chance === 2){
    $life -= 2;
}else if ($attack === $ennemyAttack){
    $life -= 1;
}
}









