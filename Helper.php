<?php

class Helper{

    public static function maxRange($message, $min, $max) {
        while(true) {
            $i = readline($message);
            $i = (int)$i;
            if($i<$min || $i > $max) {
                echo 'Minimum entry value is ' . $min . ' , maximum entry value is ' . $max . PHP_EOL;
                continue;
            }
            return $i;
        }
    }
}