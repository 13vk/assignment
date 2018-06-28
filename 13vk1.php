<?php
echo "<pre>";
$a = 5;
for ($i = 0; $i <= 5; $i++) 
{
     
    for ($k = 0; $k < $a; $k++) 
	{
        echo "&nbsp;";
    }
    for ($j = 0; $j < 2 * $i - 1; $j++) 
	{
        echo "*";
    }
     
    $a--;
    echo "<br/>";
}
echo "</pre>";
?>