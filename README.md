# simplified-datetime-interval-strings
<b>GETS SIMPLIFIED STRING DIFFERENCES BETWEEN DATETIME OBJECTS.</b>  
A Very LIGHTWEIGHT CARBON ALTERNATIVE for PHP Scripts .  
* Handles datetime interval strings such as '0 sec ago', '1 mins ago', '2 hours ago', '2 Days ago','months ago', years ago.  

Usage Example:  
//include path to script or class file  
$datetime_string = "2023-07-06 12:20:28";  
echo DateTimeStringInterval::get_interval($datetime_string);

ALSO COULD BE USED IN PHP/MYSQL PROJECTS FOR RETURNED MYSQLI DATETIME TIMESTAMPPS:  
$interval = DateTimeStringInterval::get_interval($post['created_at']);
