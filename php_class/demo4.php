<?php
$a=56;
$b=45;
$c=15;
 
if($a>$b && $a>$c)
{
	echo "$a is greater";
}
else if($b>$c && $b>$a)
{
	echo"$b is greater";
}
else if($c>$a && $c>$b)
{
	echo "$c is greater";
}
else{
echo "Wrong";

}
?>
