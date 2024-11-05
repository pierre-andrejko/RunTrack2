<?php
$a=0;
$b=0;
$operation=0;
function calcule($a,$b,$operation){
    if ($a != 0 || $b != 0){
        if($operation=="+"){
            $result=$a+$b;
        }
        elseif($operation=="-"){
            $result=$a-$b;
        }
        elseif($operation=="*"){
            $result=$a*$b;
        }
        elseif($operation=="/"){
            $result=$a/$b;
        }
        elseif($operation=="%"){
            $result=$a%$b;
        }
    echo $result;
    return $result;
    }
}
calcule(10,5,"-")
?>