#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$str = trim($str);
	$str = preg_replace('/\s\s+/', ' ', $str);
	$res = explode(' ', $str);
	sort($res);
	return $res;
}

print_r(ft_split("Hello    World AAA"));
?>
