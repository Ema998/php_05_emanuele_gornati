<?php
function mediaNumeriPari($array){
    
    $somma = 0;
    $counter = 0;
    $media = 0;
    
    foreach($array as $number){
        if($number % 2 == 0){
            $somma += $number;
            $coounter++;
        }
    };
    
    if($counter > 0){
        $media = $somma / $counter;
        echo "la media dei numeri pari è: " . $media;
        return $media;
    }else{
        return "non ci sono numeri pari";
    };
}

?>