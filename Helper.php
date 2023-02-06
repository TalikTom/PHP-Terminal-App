<?php

class Helper
{

    public static function maxRange($message, $min, $max)
    {
        while (true) {
            $i = readline($message);
            $i = (int)$i;
            if ($i < $min || $i > $max) {
                echo 'Minimum entry value is ' . $min . ' , maximum entry value is ' . $max . PHP_EOL;
                continue;
            }
            return $i;
        }
    }

    public static function textEntry($message, $value = '')
    {
        while (true) {
            $s = readline($message);
            $s = trim($s);
            if (strlen($s) === 0 && $value === '') {
                echo 'You must enter a value!' . PHP_EOL;
                continue;
            }
            if (strlen($s) === 0 && $value !== '') {
                return $value;
            }
            return $s;
        }

    }

    public static function validateDateInput($message, $value = '')
    {
        while (true) {
            $s = readline($message);
            $s = trim($s);
            if (strlen($s) === 0 && $value === '') {
                echo 'You must enter a value!' . PHP_EOL;
                continue;
            }
            if (strlen($s) === 0 && $value !== '') {
                return $value;
            }
            if (!Helper::validateDate($s)) {
                echo 'Invalid date format. Please try again.' . PHP_EOL;
                continue;
            }
            return $s;
        }
    }

    public static function validateTimeInput($message, $value = '')
    {
        while (true) {
            $s = readline($message);
            $s = trim($s);
            if (strlen($s) === 0 && $value === '') {
                echo 'You must enter a value!' . PHP_EOL;
                continue;
            }
            if (strlen($s) === 0 && $value !== '') {
                return $value;
            }
            if (!Helper::validateTime($s)) {
                echo 'Invalid date format. Please try again.' . PHP_EOL;
                continue;
            }
            return $s;
        }
    }

    public static function validateOIB($message, $value = '')
    {
        while (true) {
            $s = readline($message);
            $s = trim($s);
            if (strlen($s) === 0 && $value === '') {
                echo 'You must enter a value!' . PHP_EOL;
                continue;
            }
            if (strlen($s) === 0 && $value !== '') {
                return $value;
            }
            if (!Helper::isElevenDigitNumber($s)) {
                echo 'Invalid OIB. Enter 11 numerical OIB.' . PHP_EOL;
                continue;
            }

            return $s;
        }
    }

    public static function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    public static function validateTime($date, $format = 'H:i')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    public static function isElevenDigitNumber($input) {
        if (is_numeric($input) && strlen($input) == 11) {
            return true;
        }
        return false;
    }

//    public static function validateDate($date, $format = 'Y-m-d H:i:s')
//    {
//        $d = DateTime::createFromFormat($format, $date);
//        return $d && $d->format($format) == $date;
//    }
}
