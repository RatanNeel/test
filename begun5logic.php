<?php

// Finding Leap Year
// method : 1- Divisible By 4 ?
//          2- Divisible By 100 ?
//          3- Divisible By 400 ?

/*
$year = 2034;
if($year % 4==0 && $year % 100 ==0 && $year % 400 ==0){
    echo "{$year} Is A Leap Year";
}else if($year % 4 ==0 && $year % 100 ==0){
    echo "{$year} Is Not A Leap Year";
}else if($year % 4 ==0){
    echo "{$year} Is A Leap Year";
}else{
    echo "{$year} Is Not A Leap Year";
}

echo "\n";

if (true && true){
    echo "Great";
}
echo "\n";
if (true || false){    // ( || - Or )
    echo "WoW";
}

echo "\n";

if ($year % 4 ==0 && ($year % 100 !=0 || $year % 400==0)){
    echo "{$year} Is A Leap Year";
}else{
    echo "{$year} Is Not a Leap Year";
}

// if( true && (false || false))
// -- false 
*/


//@@@@@    Nested Code Writing   @@@@

$plot1 = true;
$plot2 = false;
$plot3 = true;
if($plot1){
    if ($plot2){
        if ($plot3){
            echo "Hello";
        }else{
            echo "Hi";
        }
    }else{
        echo "Hlw";
    }
}else{
    echo "NA";
}

    
echo "\n";


if($plot1 && $plot2 && $plot3){
    echo "Hello";
}elseif($plot1 && $plot2){
    echo "Hi";
}elseif($plot1){
    echo "Hlw";
}else{
    echo "NA";
}

