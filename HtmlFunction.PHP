<?php
function htmlList ($array, $type = 'ul')
{
    if ($type != 'ul' && $type != 'ol') {
        $type = 'ul';
    }
    $htmlList = "<$type>";
    foreach ($array as $item) {
        $htmlList .= "<li>$item</li>";
    }
    $htmlList .= "</$type>";
    return $htmlList;
}
$array = array ('Toyota', 'Mercedes', 'Lexus', 'Bentley');
$htmlList = htmlList($array, 'ol');
echo $htmlList;
?>