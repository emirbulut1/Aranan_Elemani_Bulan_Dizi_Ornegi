<?php
function arama($dizi,$aranan){
    $indis=0;
    foreach($dizi as $anh=>$değer){
        if($değer==$aranan){
            $indis=$anh;
        }
    }

        return $indis;
    
}
$dizi=array(10,20,30,40,50);
$aranan=10;
echo arama($dizi,$aranan);
?>