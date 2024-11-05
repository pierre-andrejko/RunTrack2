<?php
function leetSpeak($str){
    $a=str_replace("a",4,$str);
    echo $a."<br/>";
    $b=str_replace("b",8,$a);
    echo $b."<br/>";
    $e=str_replace("e",3,$b);
    echo $e."<br/>";
    $l=str_replace("g",6,$e);
    echo $l."<br/>";
    $s=str_replace("l",1,$l);
    echo $s."<br/>";
    $t=str_replace("s",5,$s);
    echo $t."<br/>";
    $final=str_replace("t",7,$t);
    echo $final;
    return $final;
}
leetspeak("j'ai mangé le gateau");
?>