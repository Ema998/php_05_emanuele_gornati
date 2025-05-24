<?php
function mediaNumeriPari($array){
    
    $somma = 0;
    $counter = 0;
    
    foreach($array as $number){
        if($number % 2 == 0){
            $somma += $number;
            $counter++;
        }
    };
    return $somma / $counter
}
    $lista = [1,2,3,4,5,6,7,8,9];
    $media = mediaNumeriPari($lista);
     echo $media

?>
