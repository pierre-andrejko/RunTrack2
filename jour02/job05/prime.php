<?php  
$i = 0;
$num = 2; //nombre premier minimum= 2//
while ($i < 1001 )  //tant qu'en dessous de la valeur max demandée//
{  
    $div_count=0;  //divisable par x valeurs//
    for ( $i=1; $i<=$num; $i++) 
    {  
        if (($num%$i)==0)  //divisible sans reste//
            {  
                $div_count++;  //on rajoute +1 à divcount et on refait la boucle//
            }  
    }  
        if ($div_count<3)  //si le div count est inférieur à 2...//
    {  
        echo $num."est un nombre 1er"."<br/>";  //on affiche le nombre en question car il a validé les conditions précédentes et retour à la ligne//
        $i=$i+1;  
    }  
    else
    echo $num."n'est pas un nombre 1er"."<br/>";
    $num=$num+1;  
}  
?>