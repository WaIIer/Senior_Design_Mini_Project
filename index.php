<?php
$speed   = $_GET['SPEED'];
$rpm     = $_GET['RPM'];
$time    = $_GET['time'];

var_dump($_POST);

print_r($speed);
print_r($rpm);
print_r($time);
$speed_readings = explode(",", $speed);
$rpm_readings   = explode(",", $rpm);
$time_readings  = explode(",", $time);

print_r($speed_readings);
print_r($time_readings);
print_r($rpm_readings);

for ($i = 0; $i < count($speed_readings); $i = $i + 1) {

    
    $file_content = $time_readings[$i] . "," . $speed_readings[$i] . "," . $rpm_readings[$i] . "\n";
    $file_status = file_put_contents('test_trip.txt', $file_content, FILE_APPEND);
    
    if($file_status != false)
    {
        echo "Data written to file";
    }
    else    
    {
        echo "Failure";
    }
}

?>
