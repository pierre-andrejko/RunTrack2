<?php
$i=0;
while($i <= 100){
    if($i%5==0 && $i%3==0){
        echo "FizzBuzz"."<br/>";
        $i=$i+1;
        }
    if($i%3==0){
    echo "Fizz"."<br/>";
    $i=$i+1;
    }
    if($i%5==0){
    echo "Buzz"."<br/>";
    $i=$i+1;
    }
    else{
        echo $i."<br/>";
        $i=$i+1;
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