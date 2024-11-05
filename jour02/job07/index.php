<?php
$Hauteur= 5; //hauteur maximum du triangle//
$Base= $Hauteur*2; 
$Ligne= 0; //où on en est//
$Start=0; //Pour positionner le ""/"" //
$Longline=0; //Pour positionner le ""\"" //
$Between=0; //Nombre d'espace entre "/" et "\" //
//       /\
//      /  \
//     /    \
//    /      \
//   /________\
$LigneMax=$Base;
//$test=""\"";//
while($Ligne<$Hauteur){
    if ($Longline==0){
        echo "\\";
        $Longline++;
    }
    if($Longline=0)
    $Ligne++;
}
?>