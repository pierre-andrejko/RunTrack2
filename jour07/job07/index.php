<?php
function gras($str){
    if(ctype_upper($str)=true){
        echo "<b>$str<b/>";
    }
    else{
        echo "$str";

    }
    //si commence par une majuscule mettre en gras str_replace
}
function cesar($str,$decalage){
    //$decalage=2 par défaut, affiche le mot avec un décalage entre chaque caractère
    //ex : Si $decalage vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient
//“c”.

}
function plateforme($str){
    //si mot fini par "-me" ajouter _
    
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
    <form>
    <input name="str">
    <select name="fonction">
        <option> gras </option>
        <option> cesar </option>
        <option> plateforme </option>
    </select>
    <button type="submit">
    </form>
</body>
</html>