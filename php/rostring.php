#!/usr/bin/php
<?php
if ($argc > 1)
{
    $list = array_values(array_filter(explode(' ', $argv[1])));
	$list[count($list)] = $list[0];
	unset($list[0]);
    foreach ($list as $tab)
        $res = $res.$tab." ";
    echo trim($res)."\n";
}
?>