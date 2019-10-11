#!/usr/bin/php
<?php
$stdin = fopen("php://stdin", "r");
while ($stdin && !feof($stdin))
{
	echo "Enter a number: ";
	$x = fgets($stdin);
	if ($x)
	{
		$x = trim($x);
		if (is_numeric($x))
		{
			if ($x % 2 == 0)
				echo "The number ". $x." is even\n";
			else
				echo "The number ".$x." is odd\n";
		}
		else
			echo "'".$x."' is not a number\n";
	}
}
fclose($stdin);
echo "\n";
?>
