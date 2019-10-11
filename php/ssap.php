#!/usr/bin/php
<?php
$list =  array();
unset($argv[0]);
foreach($argv as $i => $item)
{
    if ($i === 0)
        continue;
	$value = preg_split("/[\s]+/", $item);
    foreach($value as $val)
    {
		$list[] = $val;
	}
}
sort($list);
foreach($list as$item)
{
    echo "$item\n";
}