<?php
//*function occurences ($str, $char){
    //foreach ($str as $x ){
        //if ($x != $char) continue;
        //else{
        //    $result=$result++;
      //  }
    //}
    //echo $result;
  //  return $result;
//}

function occurences ($str,$char){
    $tailledumot = strlen($str);
    $compteuroccurence = 0;

    for($i=0; $i < $tailledumot; $i = $i+1){
        if ($str[$i] == $char){
            $compteuroccurence = $compteuroccurence + 1;
        }
    }
    echo "Dans ". $str. ", le nombre d'occurences de ". $char." est de " . $compteuroccurence;
    return $compteuroccurence;
}
occurences ("batard","a");
?>