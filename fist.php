<?php
echo "my name is laxman <br>";
$text1="lagrandee college";
$text2="BCA 6Th sem  <br>";
echo $text1." ".$text2;
$num1=25;
$num2=30.5;
echo $num1+$num2;
if($num1==25 and $num2==30.5)
echo "<br> Hello World";
?>
<?php
$x= 5+6;
if ($x==10);
echo $x;
?>
<?php
$t= date("H");
if($t<="20"){


echo "<br>Have a Good Day";
}
?>
<?php
$x=5/*+15*/ +6;
if($x==10)
echo $x;
else{
echo "<br>Greater than 10";
}
?>
<?php
$a =0;
$b =0;
for($i = 0; $i<5; $i++){
    $a += 10;
    $b +=5;
    echo ("<br>At the end of the loop a= $a and b=$b");
}
?>