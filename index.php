<?php
function mediaNumeriPari($array){
    
    $somma = 0;
    $counter = 0;
    $media = 0;
    
    foreach($array as $number){
        if($number % 2 == 0){
            $somma += $number;
            $counter++;
        }
    };
}
    
    $media = $somma / $counter;
     echo $media

?>
