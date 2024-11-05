<?php
function leetSpeak($str){
    $tailledumot = strlen($str);
    for($emplacement=0; $emplacement < $tailledumot; $emplacement = $emplacement+1){
        if ($str[$emplacement] == "a"){ 
                $str[$emplacement] = "4";
        }
        if ($str[$emplacement] == "b"){ 
                $str[$emplacement] = "8";
        }
        if ($str[$emplacement] == "e"){ 
                $str[$emplacement] = "3";
        }
        if ($str[$emplacement] == "g"){ 
                $str[$emplacement] = "6";
        }
        if ($str[$emplacement] == "l"){ 
                $str[$emplacement] = "1";
        }
        if ($str[$emplacement] == "s"){ 
            $str[$emplacement] = "5";
        }
        if ($str[$emplacement] == "t"){ 
           $str[$emplacement] = "7";
        }
    }
    return $str;
}


$Textemodifié = leetSpeak("J'ai mangé le gateau");
echo $Textemodifié;
?>