<?php

// Switch Case Method (Against else If Method)

$marks=30;

switch(true){
    case ($marks<=100 && $marks>=80):
    echo "A+";
    break;
    case ($marks<80 && $marks>=70):
        echo "A";
    break;
    case ($marks<70 && $marks>=60):
        echo "A-";
    break;
    case ($marks<60 && $marks>=50):
        echo "B";
    break;

    case ($marks<50 && $marks>=40):
        echo "D";
    break;

    case ($marks<40 && $marks>=33):
        echo "C";
    break;
    default:
       echo "F";

       
    }   

?>