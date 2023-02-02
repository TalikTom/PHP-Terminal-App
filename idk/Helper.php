<?php

class Helper {
    public static function numberRange($value, $min, $max){
        while(true){
            $i=readline($value);
            $i=(int)$i;
            if($i < $min || $i > $max) {
                echo "Input has to be between numbers " . $min . ' and ' . $max;
                continue;
            }
            return $i;
        }
    }

    public static function textEntry($value){
        while(true){
            $t=readline($value);
            $t=trim($t);
            if(strlen($t)===0){
                echo 'You have to enter some text' . PHP_EOL;
                continue;
            }
            return $t;
        }
    }

    public static function decimalNumberEntry($value){
        while(true){
            $d = readline($value);
            $d= (double)$d;
            if($d <= 0){
                echo 'Entered number has to be more then 0' . PHP_EOL;
                continue;
            }
            return $d;
        }
    }
}