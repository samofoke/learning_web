<?php
function ft_is_sort($list)
{
    $temp = $list;
    sort($temp);
    $res = array_reverse($temp);
    while (($temp == $list) || ($res == $list))
    {
        return (true);
    }
    return(false);
}
$tab = array(1, 2, 3, 4, 5);
// $tab = array(5, 4, 3, 2, 1);
// $tab = array("c", "b", "a");
// $tab = array("!/@#;^", "42", "Hello World", "hi", "zZzZzZz");
// $tab = array("a", "b", "c");
// $tab[] = "What are we doing now ?";
if (ft_is_sort($tab))
{
    echo "The array is sorted\n";
    print_r($tab);
}
else
{
    echo "The array is not sorted\n";
    print_r($tab);
}
?>