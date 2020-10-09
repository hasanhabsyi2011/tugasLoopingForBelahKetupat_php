<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



SOAL
Buatlah tampilan seberti di bawah dengan for:
<!--
_________
________xx
_______xxxx
______xxxxxx
_____xxxxxxxx
____xxxxxxxxxx
___xxxxxxxxxxxx
__xxxxxxxxxxxxxx
_xxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxx
_xxxxxxxxxxxxxxxx
__xxxxxxxxxxxxxx
___xxxxxxxxxxxx
____xxxxxxxxxx
_____xxxxxxxx
______xxxxxx
_______xxxx
________xx
_________ -->

<br><br><br>
Jawaban:
<br><br><br>
<?php

for( $a=9; $a>0; $a--){
    for($i=1; $i<=$a; $i++){
        echo "_";
    }for($a1=9; $a1>$a; $a1--){
        echo"x";
    }for($a2=9; $a2>$a; $a2--){
        echo"x";
    }echo"<br>";
}for($b=0; $b<=9; $b++){
    for($j=1; $j<=$b; $j++){
        echo"_";
    }for($b1=9; $b1>$b; $b1--){
        echo"x";
    }for($b2=9; $b2>$b; $b2--){
        echo"x";
    }echo"<br>";
}
?>


</body>
</html>
