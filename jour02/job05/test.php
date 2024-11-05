<?php
$i = 0;
$n = 2;
while($i<=1000){
    $div_max=0;
        for($i=1; $i<=$n; $i++){
            if (($n%$i)==0){
                $div_max=$div_max+1;
            }
        }
        if($div_max<3){
            echo $n."<br/>";
            $i=$i+1;
        }
        else
        "<br/>";
        $n=$n+1;
        }
    echo "fin"
?>
