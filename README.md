# simplified-datetime-interval-strings
<b>GETS SIMPLIFIED STRING DIFFERENCES BETWEEN DATETIME OBJECTS.</b>  
A Very LIGHTWEIGHT CARBON ALTERNATIVE for PHP Scripts .  
* Handles datetime interval strings such as '0 sec ago', '1 mins ago', '2 hrs ago', '2 days ago','mons ago', 7 yrs ago.  

Usage Example:  
//include path to class file  
$datetime_string = "2023-07-06 12:20:28";  
echo DateTimeIntervalString::get_interval($datetime_string);


Also use in php/mysql blogs to get date interval since post was created.
$interval = DateTimeIntervalString::get_interval($post['created_at']);
