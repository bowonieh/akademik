<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function cekno($x){
    if ($x > 0){
        return 1;
    }else{
        return 0;

    }
}

function cekno1($array){
    
    echo array_filter($array,'strlen');
   
}


// pusing coyyy hahahah

function rata_rata($bil){
    $jumlah = 0;
    
    for ($i = 0; $i <= count($bil)-1; $i++)
    {
    

    $jumlah = $jumlah + $bil[$i]; // atau bisa dituliskan $jumlah += $bil[$i];
    }
    
    
        
    if (count(array_filter($bil)) === 0){
        return 0;
    }else{
        $m = count(array_filter($bil));
        $rataRata = $jumlah/$m;
        return $rataRata;
    }
        
    
}
//====================================

function bilangan4($x){
    if(  $x <= 54 ){
        return "1";
      
    }elseif($x >= 54 && $x <= 60  ){
        return 1.67;
    }
    elseif($x > 60 && $x <= 65  ){
        return 1.67;
    }
    elseif($x > 65 && $x <= 69  ){
        return 2.00;
    }
    elseif($x > 69 && $x <= 75  ){
        return 2.33;
    }
    elseif($x > 75 && $x <= 81  ){
        return 2.67;
    }elseif($x > 81 && $x <= 86  ){
        return 3.00;
    }elseif($x > 86 && $x <= 91  ){
        return 3.33;
    }elseif($x > 91 && $x <= 96 ){
        return 3.67;
    }elseif($x > 96 && $x <= 101){
        return 4.00;
    }
    
}

function predikat($x){
     if(  $x <= 54 ){
        return "D";
      
    }elseif($x >= 54 && $x <= 60  ){
        return "D+";
    }
    elseif($x > 60 && $x <= 65  ){
        return "C-";
    }
    elseif($x > 65 && $x <= 69  ){
        return "C";
    }
    elseif($x > 69 && $x <= 75  ){
        return "C+";
    }
    elseif($x > 75 && $x <= 81  ){
        return "B-";
    }elseif($x > 81 && $x <= 86  ){
        return "B";
    }elseif($x > 86 && $x <= 90  ){
        return "B+";
    }elseif($x > 90 && $x <= 95 ){
        return "A-";
    }elseif($x > 95 && $x <= 100){
        return "A";
    }
}


function kriteria($x){
     if(  $x < 54 && $x < 60 ){
        return "K";
      
    }elseif($x > 60 && $x < 75  ){
        return "C";
    }
    elseif($x > 75 && $x < 90  ){
        return "B";
    }
    elseif($x > 90 && $x < 100  ){
        return "SB";
    }
    
}

function ceklulus($x,$y){
    if ($y >= $x){
        return TRUE;
    }else{
        return FALSE;
    }
}

function konversi4($x){
    $a = (1/5)*$x - 2.66;
    if($a <= 4){
        return $a;
    }
}