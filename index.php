<?php
//we'll test out our class functionalities here.

//include class file 
require_once "classes/DateTimeIntervalString.php";

// USAGE EXAMPLES

echo "<h4> TRY WITH SINGLE DATETIME STRING VARIABLE:2023-07-05 22:05:44 </h4>";
//datetime string of format Y:m:d H:i:s
$datetime_string = "2023-07-05 22:05:44";
//display datetime string interval
echo DateTimeIntervalString::get_interval($datetime_string). "<br>";

$dates_array = ["2023-06-05 12:05:44","2023-01-05 06:05:44","2023-07-05 22:05:44","2013-06-05 12:05:44","2014-06-05 12:05:44","23-06-30","23-07-10","23-07-01 12:03:12"];
$i = 1;
echo "<h3>TESTING OUT WITH ARRAY OF DATETIME STRINGS<br></h3>";
echo '["2023-06-05 12:05:44","2023-01-05 06:05:44","2023-07-05 22:05:44","2013-06-05 12:05:44","2014-06-05 12:05:44","23-06-30","23-07-10","23-07-01 12:03:12"]<br><br>';

foreach($dates_array as $date){
    echo $i.": ". DateTimeIntervalString::get_interval($date). "<br>";
    $i++;
}

?>
