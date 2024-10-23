<?php

for ($i = 1; $i<=10; $i+=1){
    echo $i;
    echo PHP_EOL;
      for ($j=0; $j<$i; $j++){
       echo "*";
    }
}  
/*
echo PHP_EOL;
$i=0;
while($i<10){
    $i++;
    echo $i.PHP_EOL;
}
echo PHP_EOL;
$n=0;
do{
    $n++;
    echo $n.PHP_EOL;
    
}while($n<10);
*/
/*
echo PHP_EOL;
for ($m = 0; $m <=30; $m+=3){
    echo $m;
    echo PHP_EOL;
}
echo "Go To \n";
$t=0;
a: $t++;
echo $t.PHP_EOL;
if($t<10) goto a;
*/
$p=1;
for($r = 0; $r<$p; $r++ ){
    echo "*";
    echo PHP_EOL;
}