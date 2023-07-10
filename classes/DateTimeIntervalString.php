<?php
/**
 * DateTimeIntervalString - a simplied Carbon alternative for PHP.
 * Handles datetime interval strings such as '0 sec ago', '1 mins ago', '2 hours ago', '2 Days ago','months ago', years ago.
 * 
 * 
 * @author PRINCE OJOI <devprinceng@gmail.com>  
 * @copyright (c) 2023 Prince Ojoi
 * @link https://github.com/devprinceng/simplified-datetime-interval-strings
 * @license MIT License
 */

/**
 * Represents datetime interval strings such as '0 sec ago', '1 mins ago', '2 hours ago', '2 Days ago','months ago', years ago.
 * 
 * Example:
 *  $datetime_string = "2023-07-06 12:20:28"  
 *  echo DateTimeStringInterval::get_interval($datetime_string); //5 hours ago
 *  
 * @var string $timezone php/mysqli accepted timezone value
 * @link https://github.com/devprinceng/simplified-datetime-interval-strings
 */
class DateTimeIntervalString
{
    public static string $timezone;

    /**
     * sets default timezone across the whole class
     * Usage: DateTimeStringInterval::setTimeZone('Africa/Lagos') 
     * @param string $timezone timezone selected; default: "Africa/Lagos"
     * @return  void
     */
    public static function setTimezone(string $timezone = "Africa/Lagos")
    {
        self::$timezone = $timezone;
        date_default_timezone_set(self::$timezone);
    }

    /**
     * returns datetime interval strings from old-date to current date; such as '0 sec ago', '1 mins ago', '2 hours ago', '2 Days ago','months ago', years ago.
     * 
     * @link https://github.com/devprinceng/simplified-datetime-interval-strings
     * @param string $datetime_string the old datetime string, eg: '2023-07-06 08:02:05'
     * @return string 
     */
    public static function get_interval(string $datetime_string): string
    {
        $datetime = new DateTime($datetime_string);
        $current_datetime = new DateTime('now');
        $current_datetime = new DateTime($current_datetime->format("Y-m-d H:i:s"));
        $datetime_interval = $datetime->diff($current_datetime);
        //intervals
        $year = $datetime_interval->y;
        $month = $datetime_interval->m;
        $day = $datetime_interval->d;
        $hour = $datetime_interval->h;
        $minute = $datetime_interval->i;
        $seconds = $datetime_interval->s;

        if (!$year) {
            //skip days display if months & zero days, i.e 2 mons; not 2 mons 0 days.
            $interval = $day < 1 ? ($month <= 1 ? "$month mon ago" : "$month mons ago") : "$month mon, $day days ago";

            if (!$month) {
                $interval = $day <= 1 ? "$day day ago" : "$day days ago";
                if (!$day) {
                    $interval = $hour <= 1 ? "$hour hr ago" : "$hour hrs ago";
                    if (!$hour) {
                        $interval = $minute <= 1 ? "$minute min ago" : "$minute mins ago";
                        if (!$minute) {
                            $interval = $seconds <= 1 ? "$seconds sec ago" : "$seconds secs ago";
                        }
                    }
                }
            }
        } else {
            $interval = "$year yrs ago";
        }

        return $interval;
    }
}