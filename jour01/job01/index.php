<?php
    $str = "LaPlateforme" ;
    $str2 = "Vive" ;
    $str3 = "!" ;
    $phrase = $str2 . $str . $str3;
    $val = 6;
    $val2 = $val+4;
    $myBool = false
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> le mot de passe c'est "<?php echo $phrase;  ?>" </p>
    <p> le contenu de la variable est "<?php echo $val; ?>"
    <p> si j'y ajoute 4 la variable est "<?php echo $val2; ?>"
    <p> le contenu de myBool est "<?php echo $myBool; ?>"
</body>
</html>