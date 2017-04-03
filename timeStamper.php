<?php

function timeStamper($url) {
    $date = urldecode($url);
   
    if (is_numeric($date)) {
        $unix = (int)$date;
        $natural = gmdate("F d, Y", $date);
    } else {
        $unix = strtotime($date);
        $natural = gmdate("F d, Y", $unix);
    }
   
 
    //echo $unix . "\n";
    //echo $natural . "\n";
   
    $json = array("unix" => $unix, "natural" => $natural);
   
    return json_encode($json);
}

echo timeStamper($_SERVER["QUERY_STRING"])

?>