<?php

// Nasted if else


$marks=60;

if($marks>=80){
    echo "A+ (Grade- 5)";
}
else{ 
if($marks<80 && $marks>=70){
    echo "A (Grade- 4)";
}else{
    if($marks<70 && $marks>=60){
        echo "A- (Grade- 3.5)";
    }else{
        if($marks<60 && $marks>=50){
            echo "B+ (Grade- 3)";
        }else{
           if($marks<50 && $marks>=40){
            echo "C (Grade- 2)";
           }else{
            if($marks<40 && $marks>=33){
                echo "D (Grade- 1)";
            }else{
                echo "F (FAIL)";
            }
           }
        }
    }
}


}