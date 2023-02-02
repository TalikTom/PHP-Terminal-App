<?php

include_once 'Helper.php';

class Start2
{

    private $appointments;

    public function __construct()
    {
        $this->appointments=[];
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
            case 2:
                $this->displayVisitingRecordsMenu();
                break;
            case 3:
                $this->displayPatientsMenu();
                break;
            case 4:
                $this->displayDoctorsMenu();
                break;

            case 5:
                $this->displayDepartmentsMenu();
                break;
            case 6:
                $this->displayMedicalRecordsMenu();
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
                break;
            case 2:
                $this->addApointment();
                break;

            case 5:
                $this->displayMainMenu();
                break;
            default:
                $this->displayAppointmentsMenu();
        }
    }

    private function displayVisitingRecordsMenu()
    {
        echo 'Visiting records menu' . PHP_EOL;
        echo '1. View visitation records' . PHP_EOL;
        echo '2. Add new visitation record' . PHP_EOL;
        echo '3. Update existing visitation record' . PHP_EOL;
        echo '4. Delete visitation record' . PHP_EOL;
        echo '5. Back to main menu' . PHP_EOL;
        $this->choosingOptionVisitationsMenu();
    }

    private function choosingOptionVisitationsMenu()
    {
        switch (Helper::maxRange('Choose an option: ', 1, 5)) {
            case 1:
                $this->viewVisitations();

            case 5:
                $this->displayMainMenu();
                break;
            default:
                $this->displayVisitingRecordsMenu();
        }
    }

    private function displayPatientsMenu()
    {
        echo 'Patients menu' . PHP_EOL;
        echo '1. View patients' . PHP_EOL;
        echo '2. Add new patient' . PHP_EOL;
        echo '3. Update existing patient' . PHP_EOL;
        echo '4. Delete patient' . PHP_EOL;
        echo '5. Back to main menu' . PHP_EOL;
        $this->choosingOptionPatientsMenu();
    }

    private function choosingOptionPatientsMenu()
    {
        switch (Helper::maxRange('Choose an option: ', 1, 5)) {
            case 1:
                $this->viewPatients();

            case 5:
                $this->displayMainMenu();
                break;
            default:
                $this->displayPatientsMenu();
        }
    }

    private function displayDoctorsMenu()
    {
        echo 'Doctors menu' . PHP_EOL;
        echo '1. View doctors' . PHP_EOL;
        echo '2. Add new doctors' . PHP_EOL;
        echo '3. Update existing doctors' . PHP_EOL;
        echo '4. Delete doctor' . PHP_EOL;
        echo '5. Back to main menu' . PHP_EOL;
        $this->choosingOptionDoctorsMenu();
    }

    private function choosingOptionDoctorsMenu()
    {
        switch (Helper::maxRange('Choose an option: ', 1, 5)) {
            case 1:
                $this->viewDoctors();

            case 5:
                $this->displayMainMenu();
                break;
            default:
                $this->displayDoctorsMenu();
        }
    }

    private function displayDepartmentsMenu()
    {
        echo 'Departments menu' . PHP_EOL;
        echo '1. View departments' . PHP_EOL;
        echo '2. Add new departments' . PHP_EOL;
        echo '3. Update existing departments' . PHP_EOL;
        echo '4. Delete departments' . PHP_EOL;
        echo '5. Back to main menu' . PHP_EOL;
        $this->choosingOptionDepartmentsMenu();
    }

    private function choosingOptionDepartmentsMenu()
    {
        switch (Helper::maxRange('Choose an option: ', 1, 5)) {
            case 1:
                $this->viewDepertments();

            case 5:
                $this->displayMainMenu();
                break;
            default:
                $this->displayDepertmentsMenu();
        }
    }

    private function displayMedicalRecordsMenu()
    {
        echo 'Medical records menu' . PHP_EOL;
        echo '1. View medical records' . PHP_EOL;
        echo '2. Add new medical records' . PHP_EOL;
        echo '3. Update existing medical records' . PHP_EOL;
        echo '4. Delete medical records' . PHP_EOL;
        echo '5. Back to main menu' . PHP_EOL;
        $this->choosingOptionMedicalRecordsMenu();
    }

    private function choosingOptionMedicalRecordsMenu()
    {
        switch (Helper::maxRange('Choose an option: ', 1, 5)) {
            case 1:
                $this->viewMedicalRecords();

            case 5:
                $this->displayMainMenu();
                break;
            default:
                $this->displayMedicalRecordsMenu();
        }
    }

    private function viewAppointments()
    {
        echo '--------------------' . PHP_EOL;
        echo 'Current appointments' . PHP_EOL;
        $ol=1;
        foreach($this->appointments as $appointment){
            echo $ol++ . '. ' . $appointment->date . PHP_EOL;
        }
        echo '--------------------' . PHP_EOL;
        $this->displayAppointmentsMenu();

    }

    private function addApointment()
    {
        $s = new stdClass();
        $s->date = Helper::textEntry('Enter new appointment: ');

        $this->appointments[]= $s;
        $this->displayAppointmentsMenu();

    }




}

new Start2;