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
    
    if($counter > 0){
        $media = $somma / $counter;
        echo "la media dei numeri pari è: " . $media;
        echo $media;
    }else{
        echo "non ci sono numeri pari";
    };
}

?>
