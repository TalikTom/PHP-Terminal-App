<?php

include_once 'Helper.php';

class Start2
{

    public function __construct()
    {
        $this->getMessage();
        $this->displayMainMenu();
    }

    public function getMessage()
    {
        echo 'Greetings, welcome to the Voyager hospital' . PHP_EOL;
    }

    public function displayMainMenu()
    {
        echo 'This is the main menu, choose an option: ' . PHP_EOL;
        echo '1. View visitor appointments' . PHP_EOL;
        echo '2. View visiting records' . PHP_EOL;
        echo '3. View patients' . PHP_EOL;
        echo '4. View doctors' . PHP_EOL;
        echo '5. View departments' . PHP_EOL;
        echo '6. View medical records' . PHP_EOL;
        echo '7. Exit terminal app' . PHP_EOL;
        $this->choosingOptionMainMenu();

    }

    public function choosingOptionMainMenu()
    {
        switch (Helper::maxRange('Choose an option: ', 1, 7)) {

            case 7:
                echo 'Have a nice day';
                break;
            default:
                $this->displayMainMenu();
        }
    }
}

new Start2;