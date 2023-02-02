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
        echo '1. Visitor appointments menu' . PHP_EOL;
        echo '2. Visiting records menu' . PHP_EOL;
        echo '3. Patients menu' . PHP_EOL;
        echo '4. Doctors menu' . PHP_EOL;
        echo '5. Departments menu' . PHP_EOL;
        echo '6. Medical records menu' . PHP_EOL;
        echo '7. Exit terminal app' . PHP_EOL;
        $this->choosingOptionMainMenu();

    }

    public function choosingOptionMainMenu()
    {
        switch (Helper::maxRange('Choose an option: ', 1, 7)) {
            case 1:
                $this->displayAppointmentsMenu();
                break;

            case 7:
                echo 'Have a nice day';
                break;
            default:
                $this->displayMainMenu();
        }
    }

    private function displayAppointmentsMenu()
    {
        echo 'Visitor appointments menu' . PHP_EOL;
        echo '1. View appointments' . PHP_EOL;
        echo '2. Add new appointment' . PHP_EOL;
        echo '3. Update existing appointment' . PHP_EOL;
        echo '4. Delete appointments' . PHP_EOL;
        echo '5. Back to main menu' . PHP_EOL;
        $this->choosingOptionAppointmentMenu();
    }

    private function choosingOptionAppointmentMenu()
    {
        switch (Helper::maxRange('Choose an option: ', 1, 5)) {
            case 1:
                $this->viewAppointments();

            case 5:
                $this->displayMainMenu();
                break;
            default:
                $this->displayAppointmentsMenu();
        }
    }


}

new Start2;