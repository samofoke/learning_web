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
  $tab = implode(" ", $argv);
  $tab = preg_replace('/\s+/', ' ', $tab);
  $tab = trim($tab);
  $tab = explode(" ", $tab);
  $name = array_shift($tab);
  sort($tab);
foreach ($tab as $elem) {
  echo $elem."\n";

 : $argv[1] = trim($argv[1]);
  $argv[1] = preg_replace('/\s+/', ' ', $argv[1]);
  $tab = explode(" ", $argv[1]);
  $first = array_shift($tab);
  $tab = implode(" ", $tab);
  if (!empty($tab))
    echo $tab." ";
  echo $first."\n";