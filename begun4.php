<?php

/// Different number system

//$n = 12;
$o = 012;
$h = 0x2B;

//printf("The Number is %d And %d and %d",$n, $o , $h);
/*printf("The Binary Equvalent Of %d is %b \n",1012,1012);
printf("The octal Equvalent Of %d is %o \n",1012,1012);
printf("The Hexadecimal Equvalent Of %d is %x \n",1012,1012);
printf("The Hexadecimal Equvalent Of %d is %X \n",1012,1012);
printf("The octal Equvalent Of %d is %o \n",65536,65536);
printf("%o is %d \n",0200000,0200000);
*/

// Variable Swaping /  ( Place holder And Argument Use )

$fname = "Neel";
$lname = "Bairagi";
$mname = "Ratan";

/*
printf("My Name Is %s %s ", $fname , $mname);
echo "\n";
printf('My Name Is %2$s %1$s ', $fname , $mname); // Plase replase By Using %$ And Here Syntex Plased Under ' ' single Colon
echo "\n";
printf('My Name Is %2$s %3$s %1$s ', $fname , $mname , $lname);
echo "\n";
printf('The Binary Equivalent of %d is %b', 15,15);

echo "\n";
printf('The Binary Equivalent of %1$d is %1$b',15);
*/

// @@@ Decimal fixing method @@@@

/*$n=34.134;
printf("%.2f",$n); // for 2 Digit
echo "\n";
$n=41.1789065455539;
printf("%.10f",$n); // for 10 Digit
*/


// @@@@ Placing zero before Numbers @@@@

/*$n = 436;
$m = 9860356;

printf("%08d \n",$n);
printf("%08d \n",$m);

*/

$n = 436.3471;
$m = 9860356.3241;

printf("%013.3f \n",$n);
printf("%013.3f \n",$m);