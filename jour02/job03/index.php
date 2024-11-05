<?php
$i=0;
while($i < 101){
    if($i < 21){
        echo "<i>".$i."</i>"."<br/>";
        $i = $i+1;
    }
    elseif($i>24 && $i < 51){
        echo "<u>".$i."</u>"."<br/>";
        $i = $i+1;
        if($i == 42){
        echo "La Plateforme_"."<br/>";
        $i = $i+1;
    }}
    else{
        echo $i."<br/>";
        $i = $i+1;  
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>