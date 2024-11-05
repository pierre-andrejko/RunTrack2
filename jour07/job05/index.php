<?php
function occurences($str,$char){
    $cmb=substr_count($str,$char);
    echo $cmb;
    return $cmb;
}
occurences("anticonstitutionnellement","i")
?>