<?php

$sayi=$_POST["sayi"];

if (!$sayi==null){
    kontrol($sayi);
} else{
    echo "Boş değer gönderilemez";
}


function kontrol($sayi){

    $sonuc=$sayi%3;

    echo ($sonuc==0) ? "$sayi 3'e bölünebilir": "$sayi 3'e bölünemez en yakın bölünen ".$sayi+(3-$sonuc); 
    
}

?>