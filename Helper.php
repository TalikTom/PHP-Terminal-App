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

    public static function textEntry($message){
        while(true){
            $s = readline($message);
            $s = trim($s);
            if(strlen($s) === 0){
                echo 'You must enter a value!';
            }
            return $s;
        }
    }
}