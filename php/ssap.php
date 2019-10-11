#!/usr/bin/php
<?PHP
if ($argc > 1)
{
    $arr = preg_split("/[\s]+/", $argv[1]);
    sort($arr);
    // foreach($arr as $temp);
    print_r($arr);
}
?>