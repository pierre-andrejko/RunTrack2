<?php
$hauteur = 5;
$i=0;
$j=0;

while($i<$hauteur){
    while ($hauteur-$i!=0){
    echo "$";
    $i++;
    }
    while ($j<=$i){
    echo "*";
    $j++;
    }
    echo "<br/>";
}

?>