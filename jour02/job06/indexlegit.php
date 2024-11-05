<?php
$largeur=20;
$hauteur=10;
$ligne=0;
$colonne=0;

while ($ligne < $largeur){
    echo "_";
    $ligne++;
}
echo "<br/>";
$ligne=0;
while ($colonne<9){
    while ($ligne<21){
        if ($ligne==0 || $ligne == 20){
        echo "|";
        $ligne++;
        }
        else{
        echo "&nbsp"."&nbsp";
        $ligne++;
        }
    }
    $colonne++; $ligne=0;echo "<br/>";
}
while ($ligne < $largeur){
    if($ligne==0 || $ligne==20){
    echo "|";
    $ligne++;
    }
    else{
    echo "_";
    $ligne++;
    }
}
?>