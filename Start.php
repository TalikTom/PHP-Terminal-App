<?php

include_once 'Helper.php';

class Start2
{

    private $appointments;
    private $visitations;
    private $patients;

    public function __construct()
    {
        $this->appointments = [];
        $this->visitations = [];
        $this->patients = [];
        $this->getMessage();
        $this->displayMainMenu();
    }

    public function getMessage()
    {
        echo 'Greetings, welcome to the Voyager hospital' . PHP_EOL;
        echo '                                         ' . PHP_EOL;
        echo ' _   ______  __  ______ _____ ____  _____' . PHP_EOL;
        echo '| | / / __ \/ / / / __ `/ __ `/ _ \/ ___/' . PHP_EOL;
        echo '| |/ / /_/ / /_/ / /_/ / /_/ /  __/ /    ' . PHP_EOL;
        echo '|___/\____/\__, /\__,_/\__, /\___/_/     ' . PHP_EOL;
        echo '          /____/      /____/             ' . PHP_EOL;
        echo '                                         ' . PHP_EOL;

    }

    public function displayMainMenu()
    {
        echo 'This is the main menu, choose an option: ' . PHP_EOL;
        echo '1. Visitor appointments menu' . PHP_EOL;
        echo '2. Visitation records menu' . PHP_EOL;
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
                $this->displayVisitationsRecordsMenu();
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
            case 3:
                $this->updateAppointment();
                break;
            case 4:
                $this->deleteAppointment();
                break;

            case 5:
                $this->displayMainMenu();
                break;
            default:
                $this->displayAppointmentsMenu();
        }
    }

    private function displayVisitationsRecordsMenu()
    {
        echo 'Visitation records menu' . PHP_EOL;
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
                break;
            case 2:
                $this->addVisitation();
                break;
            case 3:
                $this->updateVisitation();
                break;
            case 4:
                $this->deleteVisitation();
                break;

            case 5:
                $this->displayMainMenu();
                break;
            default:
                $this->displayVisitationsRecordsMenu();
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
                break;
            case 2:
                $this->addPatient();
                break;
            case 3:
                $this->updatePatient();
                break;
            case 4:
                $this->deletePatient();
                break;

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

    private function viewAppointments($displayAppointments = true)
    {
        echo '--------------------' . PHP_EOL;
        echo 'Current appointments' . PHP_EOL;
        $ol = 1;
        foreach ($this->appointments as $appointment) {
            echo $ol++ . '. ' . $appointment->date . ' ' . $appointment->time . PHP_EOL;
        }
        echo '--------------------' . PHP_EOL;
        if ($displayAppointments) {
            $this->displayAppointmentsMenu();
        }


    }

    private function addApointment()
    {
        $s = new stdClass();
        $s->date = Helper::textEntry('Enter new appointment date(Y-M-D): ');
        $s->time = Helper::textEntry('Enter new appointment time(hh:mm): ');

        $this->appointments[] = $s;
        echo '                                ' . PHP_EOL;
        echo '             __    __         __' . PHP_EOL;
        echo '  ____ _____/ /___/ /__  ____/ /' . PHP_EOL;
        echo ' / __ `/ __  / __  / _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ / /_/ / /_/ /  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/\__,_/\__,_/\___/\__,_/   ' . PHP_EOL;
        echo '                                ' . PHP_EOL;
        $this->displayAppointmentsMenu();

    }

    private function deleteAppointment()
    {
        $this->viewAppointments(false);
        $ol = Helper::maxRange('Pick an appointment to delete: ', 1, count($this->appointments));
        $ol--;
        array_splice($this->appointments, $ol, 1);
        echo '                                    ' . PHP_EOL;
        echo '       __     __     __           __' . PHP_EOL;
        echo '  ____/ /__  / /__  / /____  ____/ /' . PHP_EOL;
        echo ' / __  / _ \/ / _ \/ __/ _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ /  __/ /  __/ /_/  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/\___/_/\___/\__/\___/\__,_/   ' . PHP_EOL;
        echo '                                    ' . PHP_EOL;

        $this->displayAppointmentsMenu();
    }

    private function updateAppointment()
    {
        $this->viewAppointments(false);
        $ol = Helper::maxRange('Pick an appointment to update: ', 1, count($this->appointments));
        $ol--;
        $this->appointments[$ol]->date = Helper::textEntry('Enter new date (' .
            $this->appointments[$ol]->date
            .'): ', $this->appointments[$ol]->date);
        $this->appointments[$ol]->time = Helper::textEntry('Enter new time (' .
            $this->appointments[$ol]->time
            .'): ', $this->appointments[$ol]->time);
        echo '                                          ' . PHP_EOL;
        echo '                   __      __           __' . PHP_EOL;
        echo '  __  ______  ____/ /___ _/ /____  ____/ /' . PHP_EOL;
        echo ' / / / / __ \/ __  / __ `/ __/ _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ / /_/ / /_/ / /_/ / /_/  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/ .___/\__,_/\__,_/\__/\___/\__,_/   ' . PHP_EOL;
        echo '    /_/                                   ' . PHP_EOL;
        echo '                                          ' . PHP_EOL;
        $this->displayAppointmentsMenu();

    }

    private function viewVisitations($displayVisitations = true)
    {
        echo '--------------------' . PHP_EOL;
        echo 'Current appointments' . PHP_EOL;
        $ol = 1;
        foreach ($this->visitations as $visitation) {
            echo $ol++ . '. ' . $visitation->date . ' ' . $visitation->time . PHP_EOL;
        }
        echo '--------------------' . PHP_EOL;
        if ($displayVisitations) {
            $this->displayVisitationsRecordsMenu();
        }
    }

    private function addVisitation()
    {
        $s = new stdClass();
        $s->date = Helper::textEntry('Enter new visitation date(Y-M-D): ');
        $s->time = Helper::textEntry('Enter new visitation time(hh:mm): ');

        $this->visitations[] = $s;
        echo '                                ' . PHP_EOL;
        echo '             __    __         __' . PHP_EOL;
        echo '  ____ _____/ /___/ /__  ____/ /' . PHP_EOL;
        echo ' / __ `/ __  / __  / _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ / /_/ / /_/ /  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/\__,_/\__,_/\___/\__,_/   ' . PHP_EOL;
        echo '                                ' . PHP_EOL;
        $this->displayVisitationsRecordsMenu();

    }

    private function deleteVisitation()
    {
        $this->viewVisitations(false);
        $ol = Helper::maxRange('Pick an appointment to delete: ', 1, count($this->visitations));
        $ol--;
        array_splice($this->visitations, $ol, 1);
        echo '                                    ' . PHP_EOL;
        echo '       __     __     __           __' . PHP_EOL;
        echo '  ____/ /__  / /__  / /____  ____/ /' . PHP_EOL;
        echo ' / __  / _ \/ / _ \/ __/ _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ /  __/ /  __/ /_/  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/\___/_/\___/\__/\___/\__,_/   ' . PHP_EOL;
        echo '                                    ' . PHP_EOL;

        $this->displayVisitationsRecordsMenu();
    }

    private function updateVisitation()
    {
        $this->viewVisitations(false);
        $ol = Helper::maxRange('Pick an appointment to update: ', 1, count($this->visitations));
        $ol--;
        $this->visitations[$ol]->date = Helper::textEntry('Enter new date (' .
            $this->visitations[$ol]->date
            .'): ', $this->visitations[$ol]->date);
        $this->visitations[$ol]->time = Helper::textEntry('Enter new time (' .
            $this->visitations[$ol]->time
            .'): ', $this->visitations[$ol]->time);
        echo '                                          ' . PHP_EOL;
        echo '                   __      __           __' . PHP_EOL;
        echo '  __  ______  ____/ /___ _/ /____  ____/ /' . PHP_EOL;
        echo ' / / / / __ \/ __  / __ `/ __/ _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ / /_/ / /_/ / /_/ / /_/  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/ .___/\__,_/\__,_/\__/\___/\__,_/   ' . PHP_EOL;
        echo '    /_/                                   ' . PHP_EOL;
        echo '                                          ' . PHP_EOL;
        $this->displayVisitationsRecordsMenu();

    }

    private function addPatient()
    {
        $p = new stdClass();
        $p->firstName = Helper::textEntry('Enter first name of the patient: ');
        $p->lastName = Helper::textEntry('Enter last name of the patient: ');
        $p->address = Helper::textEntry('Enter patients address: ');
        $p->oib = Helper::textEntry('Enter patients OIB: ');
        $p->doctor_id = Helper::textEntry('Enter doctors ID: ');


        $this->patients[] = $p;
        echo '                                ' . PHP_EOL;
        echo '             __    __         __' . PHP_EOL;
        echo '  ____ _____/ /___/ /__  ____/ /' . PHP_EOL;
        echo ' / __ `/ __  / __  / _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ / /_/ / /_/ /  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/\__,_/\__,_/\___/\__,_/   ' . PHP_EOL;
        echo '                                ' . PHP_EOL;
        $this->displayPatientsMenu();
    }

    private function viewPatients($displayPatients=true)
    {
        echo '------------------------' . PHP_EOL;
        echo 'All patients' . PHP_EOL;
        $ol = 1;
        foreach ($this->patients as $patient) {
            echo '------------------------' . PHP_EOL;
            echo $ol++ . '. ' . $patient->firstName . ' ' . $patient->lastName . PHP_EOL . $patient->address . ' ' . $patient->oib . ' ' .$patient->doctor_id . PHP_EOL;

        }
        echo '------------------------' . PHP_EOL;
        if ($displayPatients) {
            $this->displayPatientsMenu();
        }
    }

    private function updatePatient()
    {
        $this->viewPatients(false);
        $ol = Helper::maxRange('Pick a patient to update: ', 1, count($this->patients));
        $ol--;
        $this->patients[$ol]->firstName = Helper::textEntry('Enter new first name (' .
            $this->patients[$ol]->firstName
            .'): ', $this->patients[$ol]->firstName);
        $this->patients[$ol]->lastName = Helper::textEntry('Enter new last name (' .
            $this->patients[$ol]->lastName
            .'): ', $this->patients[$ol]->lastName);
        $this->patients[$ol]->address = Helper::textEntry('Enter new address (' .
            $this->patients[$ol]->address
            .'): ', $this->patients[$ol]->address);
        $this->patients[$ol]->oib = Helper::textEntry('Enter new oib (' .
            $this->patients[$ol]->oib
            .'): ', $this->patients[$ol]->oib);
        $this->patients[$ol]->doctor_id = Helper::textEntry('Enter new doctor id (' .
            $this->patients[$ol]->doctor_id
            .'): ', $this->patients[$ol]->doctor_id);
        echo '                                          ' . PHP_EOL;
        echo '                   __      __           __' . PHP_EOL;
        echo '  __  ______  ____/ /___ _/ /____  ____/ /' . PHP_EOL;
        echo ' / / / / __ \/ __  / __ `/ __/ _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ / /_/ / /_/ / /_/ / /_/  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/ .___/\__,_/\__,_/\__/\___/\__,_/   ' . PHP_EOL;
        echo '    /_/                                   ' . PHP_EOL;
        echo '                                          ' . PHP_EOL;
        $this->displayPatientsMenu();
    }

    private function deletePatient()
    {
        $this->viewPatients(false);
        $ol = Helper::maxRange('Pick a patient to delete: ', 1, count($this->patients));
        $ol--;
        array_splice($this->patients, $ol, 1);
        echo '                                    ' . PHP_EOL;
        echo '       __     __     __           __' . PHP_EOL;
        echo '  ____/ /__  / /__  / /____  ____/ /' . PHP_EOL;
        echo ' / __  / _ \/ / _ \/ __/ _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ /  __/ /  __/ /_/  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/\___/_/\___/\__/\___/\__,_/   ' . PHP_EOL;
        echo '                                    ' . PHP_EOL;

        $this->displayPatientsMenu();
    }

}

new Start2;