<?php

include_once 'Helper.php';

class Start2
{

    private $visitors;
    private $visitations;
    private $patients;
    private $doctors;
    private $departments;
    private $medicalRecords;

    public function __construct()
    {


        $this->visitors = [];
        $this->visitations = [];
        $this->patients = [];
        $this->doctors = [];
        $this->departments = [];
        $this->medicalRecords = [];
        $this->testData();
        $this->getMessage();
        $this->displayMainMenu();

    }

    public function getMessage()
    {
        echo PHP_EOL;
        echo 'Greetings, welcome to the: ' . PHP_EOL;
        echo '                                         ' . PHP_EOL;
        echo ' _   ______  __  __ ___  ____  ___  _____' . PHP_EOL;
        echo '| | / / __ \/ / / / __ `/ __ `/ _ \/ ___/' . PHP_EOL;
        echo '| |/ / /_/ / /_/ / /_/ / /_/ /  __/ /    ' . PHP_EOL;
        echo '|___/\____/\__, /\__,_/\__, /\___/_/     ' . PHP_EOL;
        echo '          /____/      /____/             ' . PHP_EOL;
        echo '                                         ' . PHP_EOL;
        echo '    __                       __        __' . PHP_EOL;
        echo '   / /_  ____  _________  _ / /_____ _/ /' . PHP_EOL;
        echo '  / __ \/ __ \/ ___/ __ \/ / __/ __ `/ / ' . PHP_EOL;
        echo ' / / / / /_/ (__  ) /_/ / / /_/ /_/ / /  ' . PHP_EOL;
        echo '/_/ /_/\____/____/ .___/_/\__/\__,_/_/   ' . PHP_EOL;
        echo '                /_/                      ' . PHP_EOL;
        echo PHP_EOL;


    }

    public function displayMainMenu()
    {
        echo PHP_EOL;
        echo 'This is the main menu, choose an option: ' . PHP_EOL;
        echo PHP_EOL;
        echo '1. Visitors menu' . PHP_EOL;
        echo '2. Visitation menu' . PHP_EOL;
        echo '3. Patients menu' . PHP_EOL;
        echo '4. Doctors menu' . PHP_EOL;
        echo '5. Departments menu' . PHP_EOL;
        echo '6. Medical records menu' . PHP_EOL;
        echo '7. Exit terminal app' . PHP_EOL;
        echo PHP_EOL;
        $this->choosingOptionMainMenu();

    }

    public function choosingOptionMainMenu()
    {
        switch (Helper::maxRange('Choose an option: ', 1, 7)) {
            case 1:
                $this->displayVisitorsMenu();
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
                echo PHP_EOL;

                echo PHP_EOL;
                echo ' _   ______  __  ______ _____ ____  _____' . PHP_EOL;
                echo '| | / / __ \/ / / / __ `/ __ `/ _ \/ ___/' . PHP_EOL;
                echo '| |/ / /_/ / /_/ / /_/ / /_/ /  __/ /    ' . PHP_EOL;
                echo '|___/\____/\__, /\__,_/\__, /\___/_/     ' . PHP_EOL;
                echo '          /____/      /____/             ' . PHP_EOL;
                echo PHP_EOL;
                echo '    __                       __        __' . PHP_EOL;
                echo '   / /_  ____  _________  _ / /_____ _/ /' . PHP_EOL;
                echo '  / __ \/ __ \/ ___/ __ \/ / __/ __ `/ / ' . PHP_EOL;
                echo ' / / / / /_/ (__  ) /_/ / / /_/ /_/ / /  ' . PHP_EOL;
                echo '/_/ /_/\____/____/ .___/_/\__/\__,_/_/   ' . PHP_EOL;
                echo '                /_/                      ' . PHP_EOL;
                echo PHP_EOL;
                echo '-------------Have a nice day-------------' . PHP_EOL;
                break;
            default:
                $this->displayMainMenu();
        }
    }

    private function displayVisitorsMenu()
    {
        echo PHP_EOL;
        echo 'Visitor menu:' . PHP_EOL;
        echo PHP_EOL;
        echo '1. View visitors' . PHP_EOL;
        echo '2. Add new visitor' . PHP_EOL;
        echo '3. Update existing visitor' . PHP_EOL;
        echo '4. Delete visitors' . PHP_EOL;
        echo '5. Back to main menu' . PHP_EOL;
        echo PHP_EOL;
        $this->choosingOptionVisitorsMenu();
    }

    private function choosingOptionVisitorsMenu()
    {
        switch (Helper::maxRange('Choose an option: ', 1, 5)) {
            case 1:
                $this->viewVisitors();
                break;
            case 2:
                $this->addVisitors();
                break;
            case 3:
                $this->updateVisitors();
                break;
            case 4:
                $this->deleteVisitors();
                break;

            case 5:
                $this->displayMainMenu();
                break;
            default:
                $this->displayVisitorsMenu();
        }
    }

    private function displayVisitationsRecordsMenu()
    {
        echo PHP_EOL;
        echo 'Visitation records menu:' . PHP_EOL;
        echo PHP_EOL;
        echo '1. View visitation records' . PHP_EOL;
        echo '2. Add new visitation' . PHP_EOL;
        echo '3. Update existing visitation' . PHP_EOL;
        echo '4. Delete visitation' . PHP_EOL;
        echo '5. Back to main menu' . PHP_EOL;
        echo PHP_EOL;
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
        echo PHP_EOL;
        echo 'Patients menu:' . PHP_EOL;
        echo PHP_EOL;
        echo '1. View patients' . PHP_EOL;
        echo '2. Add new patient' . PHP_EOL;
        echo '3. Update existing patient' . PHP_EOL;
        echo '4. Delete patient' . PHP_EOL;
        echo '5. Back to main menu' . PHP_EOL;
        echo PHP_EOL;
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
        echo PHP_EOL;
        echo 'Doctors menu:' . PHP_EOL;
        echo PHP_EOL;
        echo '1. View doctors' . PHP_EOL;
        echo '2. Add new doctors' . PHP_EOL;
        echo '3. Update existing doctors' . PHP_EOL;
        echo '4. Delete doctor' . PHP_EOL;
        echo '5. Back to main menu' . PHP_EOL;
        echo PHP_EOL;
        $this->choosingOptionDoctorsMenu();
    }

    private function choosingOptionDoctorsMenu()
    {
        switch (Helper::maxRange('Choose an option: ', 1, 5)) {
            case 1:
                $this->viewDoctors();
                break;
            case 2:
                $this->addDoctor();
                break;
            case 3:
                $this->updateDoctor();
                break;
            case 4:
                $this->deleteDoctor();
                break;

            case 5:
                $this->displayMainMenu();
                break;
            default:
                $this->displayDoctorsMenu();
        }
    }

    private function displayDepartmentsMenu()
    {
        echo PHP_EOL;
        echo 'Departments menu:' . PHP_EOL;
        echo PHP_EOL;
        echo '1. View departments' . PHP_EOL;
        echo '2. Add new departments' . PHP_EOL;
        echo '3. Update existing departments' . PHP_EOL;
        echo '4. Delete departments' . PHP_EOL;
        echo '5. Back to main menu' . PHP_EOL;
        echo PHP_EOL;
        $this->choosingOptionDepartmentsMenu();
    }

    private function choosingOptionDepartmentsMenu()
    {
        switch (Helper::maxRange('Choose an option: ', 1, 5)) {
            case 1:
                $this->viewDepartments();
                break;
            case 2:
                $this->addDepartment();
                break;
            case 3:
                $this->updateDepartment();
                break;
            case 4:
                $this->deleteDepartment();
                break;

            case 5:
                $this->displayMainMenu();
                break;
            default:
                $this->displayDepartmentsMenu();
        }
    }

    private function displayMedicalRecordsMenu()
    {
        echo PHP_EOL;
        echo 'Medical records menu:' . PHP_EOL;
        echo PHP_EOL;
        echo '1. View medical records' . PHP_EOL;
        echo '2. Add new medical records' . PHP_EOL;
        echo '3. Update existing medical records' . PHP_EOL;
        echo '4. Delete medical records' . PHP_EOL;
        echo '5. Back to main menu' . PHP_EOL;
        echo PHP_EOL;
        $this->choosingOptionMedicalRecordsMenu();
    }

    private function choosingOptionMedicalRecordsMenu()
    {
        switch (Helper::maxRange('Choose an option: ', 1, 5)) {
            case 1:
                $this->viewMedicalRecords();
                break;
            case 2:
                $this->addMedicalRecord();
                break;
            case 3:
                $this->updateMedicalRecord();
                break;
            case 4:
                $this->deleteMedicalRecord();

            case 5:
                $this->displayMainMenu();
                break;
            default:
                $this->displayMedicalRecordsMenu();
        }
    }

    private function viewVisitors($displayAppointments = true)
    {
        echo '--------------------' . PHP_EOL;
        echo 'Current visitors' . PHP_EOL;
        $ol = 1;
        foreach ($this->visitors as $visitor) {
            echo $ol++ . '. ' . $visitor->firstName . ' ' . $visitor->lastName . ' || ' . $visitor->address . ' ' . $visitor->phoneNumber . PHP_EOL;
        }
        echo '--------------------' . PHP_EOL;
        if ($displayAppointments) {
            $this->displayVisitorsMenu();
        }


    }

    private function addVisitors()
    {
        $s = new stdClass();
        $s->firstName = Helper::validateNoNumericals('Enter first name: ');
        $s->lastName = Helper::validateNoNumericals('Enter last name: ');
        $s->address = Helper::textEntry('Enter address: ');
        $s->phoneNumber = Helper::validateOnlyNumericals('Enter phone number: ');
        /*$s->date = Helper::validateDateInput('Enter new appointment date(yyyy-mm-dd): ');
        $s->time = Helper::validateTimeInput('Enter new appointment time(hh:mm): ');*/

        $this->visitors[] = $s;
        echo '                                ' . PHP_EOL;
        echo '             __    __         __' . PHP_EOL;
        echo '  ____ _____/ /___/ /__  ____/ /' . PHP_EOL;
        echo ' / __ `/ __  / __  / _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ / /_/ / /_/ /  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/\__,_/\__,_/\___/\__,_/   ' . PHP_EOL;
        echo '                                ' . PHP_EOL;
        $this->displayVisitorsMenu();

    }

    private function deleteVisitors()
    {
        $this->viewVisitors(false);
        $ol = Helper::maxRange('Pick a visitor to delete: ', 1, count($this->visitors));
        $ol--;
        array_splice($this->visitors, $ol, 1);
        echo '                                    ' . PHP_EOL;
        echo '       __     __     __           __' . PHP_EOL;
        echo '  ____/ /__  / /__  / /____  ____/ /' . PHP_EOL;
        echo ' / __  / _ \/ / _ \/ __/ _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ /  __/ /  __/ /_/  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/\___/_/\___/\__/\___/\__,_/   ' . PHP_EOL;
        echo '                                    ' . PHP_EOL;

        $this->displayVisitorsMenu();
    }

    private function updateVisitors()
    {
        $this->viewVisitors(false);
        $ol = Helper::maxRange('Pick a visitor to update: ', 1, count($this->visitors));
        $ol--;
        $this->visitors[$ol]->firstName = Helper::validateNoNumericals('Enter new first name (' .
            $this->visitors[$ol]->firstName
            . '): ', $this->visitors[$ol]->firstName);
        $this->visitors[$ol]->lastName = Helper::validateNoNumericals('Enter new last name (' .
            $this->visitors[$ol]->lastName
            . '): ', $this->visitors[$ol]->lastName);
        $this->visitors[$ol]->address = Helper::textEntry('Enter new address (' .
            $this->visitors[$ol]->address
            . '): ', $this->visitors[$ol]->address);
        $this->visitors[$ol]->phoneNumber = Helper::validateOnlyNumericals('Enter new phone number (' .
            $this->visitors[$ol]->phoneNumber
            . '): ', $this->visitors[$ol]->phoneNumber);
        echo '                                          ' . PHP_EOL;
        echo '                   __      __           __' . PHP_EOL;
        echo '  __  ______  ____/ /___ _/ /____  ____/ /' . PHP_EOL;
        echo ' / / / / __ \/ __  / __ `/ __/ _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ / /_/ / /_/ / /_/ / /_/  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/ .___/\__,_/\__,_/\__/\___/\__,_/   ' . PHP_EOL;
        echo '    /_/                                   ' . PHP_EOL;
        echo '                                          ' . PHP_EOL;
        $this->displayVisitorsMenu();

    }

    private function viewVisitations($displayVisitations = true)
    {
        echo '--------------------' . PHP_EOL;
        echo 'Current visitors' . PHP_EOL;
        $ol = 1;
        foreach ($this->visitations as $visitation) {
            echo $ol++ . '. ' . $visitation->date . ' ' . $visitation->time . PHP_EOL;

            foreach ($visitation->patients as $p) {
                echo 'Patient: ' . $p->firstName . ' ' . $p->lastName . PHP_EOL;
            }
            foreach ($visitation->visitors as $v) {
                echo 'Visitor: ' . $v->firstName . ' ' . $v->lastName . PHP_EOL;
            }
        }
        echo '--------------------' . PHP_EOL;
        if ($displayVisitations) {
            $this->displayVisitationsRecordsMenu();
        }
    }

    private function addVisitation()
    {
        $s = new stdClass();
        $s->date = Helper::validateDateInput('Enter new appointment date(yyyy-mm-dd): ');
        $s->time = Helper::validateTimeInput('Enter new appointment time(hh:mm): ');

        $s->patients = [];
        while (true) {
            $this->viewPatients(false);
            $rb = Helper::maxRange('Choose a patient: ', 1, count($this->patients));
            $rb--;

            $s->patients[] = $this->patients[$rb];
            break;

        }
        $s->visitors = [];
        while (true) {
            $this->viewVisitors(false);
            $rb = Helper::maxRange('Choose a visitor: ', 1, count($this->visitors));
            $rb--;

            $s->visitors[] = $this->visitors[$rb];
            break;

        }


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
        $ol = Helper::maxRange('Pick a visitation to delete: ', 1, count($this->visitations));
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
        $rb = Helper::maxRange('Pick a visitation to update: ', 1, count($this->visitations));
        $rb--;
        $this->visitations[$rb]->date = Helper::validateDateInput('Enter new date (' .
            $this->visitations[$rb]->date
            . '): ', $this->visitations[$rb]->date);
        $this->visitations[$rb]->time = Helper::validateTimeInput('Enter new time (' .
            $this->visitations[$rb]->time
            . '): ', $this->visitations[$rb]->time);

        $this->viewPatients(false);
        $rb1 = Helper::maxRange('Choose a patient: ', 1, count($this->patients));
        $rb1--;
        $this->visitations[$rb]->patient = $this->patients[$rb1];



        $this->viewVisitors(false);
        $rb2 = Helper::maxRange('Choose a visitor: ', 1, count($this->visitors));
        $rb2--;
        $this->visitations[$rb]->visitor = $this->visitors[$rb2];

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
        $p->firstName = Helper::validateNoNumericals('Enter first name of the patient: ');
        $p->lastName = Helper::validateNoNumericals('Enter last name of the patient: ');
        $p->address = Helper::textEntry('Enter patients address: ');
        $p->oib = Helper::validateOIB('Enter patients oib: ');
        $p->doctor_id = Helper::validateOnlyNumericals('Enter doctors ID: ');


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

    private function viewPatients($displayPatients = true)
    {

        echo '--------------------' . PHP_EOL;
        echo 'Current patients: ' . PHP_EOL;
        $rb = 1;
        foreach ($this->patients as $patient) {
            echo $rb++ . '. ' . $patient->firstName . ' ' . $patient->lastName . PHP_EOL . $patient->address . ' ' . $patient->oib . ' ' . $patient->doctor_id . PHP_EOL;
        }
        echo '--------------------' . PHP_EOL;
        if ($displayPatients) {
            $this->displayPatientsMenu();
        }
    }

    private function updatePatient()
    {
        $this->viewPatients(false);
        $ol = Helper::maxRange('Pick a patient to update: ', 1, count($this->patients));
        $ol--;
        $this->patients[$ol]->firstName = Helper::validateNoNumericals('Enter new first name (' .
            $this->patients[$ol]->firstName
            . '): ', $this->patients[$ol]->firstName);
        $this->patients[$ol]->lastName = Helper::validateNoNumericals('Enter new last name (' .
            $this->patients[$ol]->lastName
            . '): ', $this->patients[$ol]->lastName);
        $this->patients[$ol]->address = Helper::textEntry('Enter new address (' .
            $this->patients[$ol]->address
            . '): ', $this->patients[$ol]->address);
        $this->patients[$ol]->oib = Helper::validateOIB('Enter new oib (' .
            $this->patients[$ol]->oib
            . '): ', $this->patients[$ol]->oib);
        $this->patients[$ol]->doctor_id = Helper::validateOnlyNumericals('Enter new doctor id (' .
            $this->patients[$ol]->doctor_id
            . '): ', $this->patients[$ol]->doctor_id);
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

    private function addDoctor()
    {
        $o = new stdClass();
        $o->firstName = Helper::validateNoNumericals('Enter first name: ');
        $o->lastName = Helper::validateNoNumericals('Enter last name: ');
        $o->specialization = Helper::validateNoNumericals('Enter specialization: ');
        $o->oib = Helper::validateOIB('Enter oib: ');


        while (true) {
            $this->viewDepartments(false);
            $rb = Helper::maxRange('Choose a department: ', 1, count($this->departments));
            $rb--;
            $o->departments[] = $this->departments[$rb];
            break;

        }


        $this->doctors[] = $o;
        $this->displayDoctorsMenu();

    }

    private function updateDoctor()
    {
        $this->viewDoctors(false);
        $rb = Helper::maxRange('Pick a doctor to update: ', 1, count($this->doctors));
        $rb--;
        $this->doctors[$rb]->firstName = Helper::validateNoNumericals('Enter new first name (' .
            $this->doctors[$rb]->firstName
            . '): ', $this->doctors[$rb]->firstName);
        $this->doctors[$rb]->lastName = Helper::validateNoNumericals('Enter new last name (' .
            $this->doctors[$rb]->lastName
            . '): ', $this->doctors[$rb]->lastName);
        $this->doctors[$rb]->specialization = Helper::validateNoNumericals('Enter new specialization (' .
            $this->doctors[$rb]->specialization
            . '): ', $this->doctors[$rb]->specialization);
        $this->doctors[$rb]->oib = Helper::validateOnlyNumericals('Enter new oib (' .
            $this->doctors[$rb]->oib
            . '): ', $this->doctors[$rb]->oib);

        $this->viewDepartments(false);
        $rb1 = Helper::maxRange('Choose a department: ', 1, count($this->departments));
        $rb1--;
        $this->departments[$rb] = $this->departments[$rb1];


        echo '                                          ' . PHP_EOL;
        echo '                   __      __           __' . PHP_EOL;
        echo '  __  ______  ____/ /___ _/ /____  ____/ /' . PHP_EOL;
        echo ' / / / / __ \/ __  / __ `/ __/ _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ / /_/ / /_/ / /_/ / /_/  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/ .___/\__,_/\__,_/\__/\___/\__,_/   ' . PHP_EOL;
        echo '    /_/                                   ' . PHP_EOL;
        echo '                                          ' . PHP_EOL;
        $this->displayDoctorsMenu();
    }

    private function deleteDoctor()
    {
        $this->viewDoctors(false);
        $ol = Helper::maxRange('Pick a doctor to delete: ', 1, count($this->doctors));
        $ol--;
        array_splice($this->doctors, $ol, 1);
        echo '                                    ' . PHP_EOL;
        echo '       __     __     __           __' . PHP_EOL;
        echo '  ____/ /__  / /__  / /____  ____/ /' . PHP_EOL;
        echo ' / __  / _ \/ / _ \/ __/ _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ /  __/ /  __/ /_/  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/\___/_/\___/\__/\___/\__,_/   ' . PHP_EOL;
        echo '                                    ' . PHP_EOL;

        $this->displayDoctorsMenu();
    }


    private function viewDoctors($displayDoctors = true)
    {
//        echo '------------------------' . PHP_EOL;
//        echo 'All doctors: ' . PHP_EOL;
//        $ol = 1;
//        foreach ($this->doctors as $doctor) {
//            echo '------------------------' . PHP_EOL;
//            echo $ol++ . '. ' . $doctor->firstName . ' ' . $doctor->lastName . PHP_EOL . $doctor->specialization . ' ' . $doctor->oib . ' ' .$doctor->department_id . PHP_EOL;
//
//        }
//        echo '------------------------' . PHP_EOL;
//        if ($displayDoctors) {
//            $this->displayDoctorsMenu();
//        }
        echo '--------------------' . PHP_EOL;
        echo 'Doctors: ' . PHP_EOL;
        $rb = 1;
        foreach ($this->doctors as $v) {
            echo $rb++ . '. ' . $v->firstName . ' ' . $v->lastName . ' || ' . $v->specialization . ' OIB: ' . $v->oib . PHP_EOL;
                      foreach ($v->departments as $p) {
                echo "\t" . 'Department: ' . $p->departmentName . PHP_EOL;
            }
        }
        echo '--------------------' . PHP_EOL;
        if ($displayDoctors) {
            $this->displayDoctorsMenu();
        }
    }

    private function addDepartment()
    {
        $d = new stdClass();
        $d->departmentName = Helper::validateNoNumericals('Enter departments name: ');
        $d->numberOfRooms = Helper::validateOnlyNumericals('Enter number of rooms: ');


        $this->departments[] = $d;
        echo '                                ' . PHP_EOL;
        echo '             __    __         __' . PHP_EOL;
        echo '  ____ _____/ /___/ /__  ____/ /' . PHP_EOL;
        echo ' / __ `/ __  / __  / _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ / /_/ / /_/ /  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/\__,_/\__,_/\___/\__,_/   ' . PHP_EOL;
        echo '                                ' . PHP_EOL;
        $this->displayDepartmentsMenu();
    }

    private function viewDepartments($displayDepartments = true)
    {
        echo '--------------------' . PHP_EOL;
        echo 'Current departments' . PHP_EOL;
        $ol = 1;
        foreach ($this->departments as $department) {
            echo $ol++ . '. ' . $department->departmentName . ' ' . '|| Total rooms: ' . $department->numberOfRooms . PHP_EOL;
        }
        echo '--------------------' . PHP_EOL;
        if ($displayDepartments) {
            $this->displayDepartmentsMenu();
        }
    }

    private function updateDepartment()
    {
        $this->viewDepartments(false);
        $ol = Helper::maxRange('Pick a department to update: ', 1, count($this->departments));
        $ol--;
        $this->departments[$ol]->departmentName = Helper::validateNoNumericals('Enter new department name (' .
            $this->departments[$ol]->departmentName
            . '): ', $this->departments[$ol]->departmentName);
        $this->departments[$ol]->numberOfRooms = Helper::validateOnlyNumericals('Enter total number of rooms (' .
            $this->departments[$ol]->numberOfRooms
            . '): ', $this->departments[$ol]->numberOfRooms);
        echo '                                          ' . PHP_EOL;
        echo '                   __      __           __' . PHP_EOL;
        echo '  __  ______  ____/ /___ _/ /____  ____/ /' . PHP_EOL;
        echo ' / / / / __ \/ __  / __ `/ __/ _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ / /_/ / /_/ / /_/ / /_/  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/ .___/\__,_/\__,_/\__/\___/\__,_/   ' . PHP_EOL;
        echo '    /_/                                   ' . PHP_EOL;
        echo '                                          ' . PHP_EOL;
        $this->displayDepartmentsMenu();
    }

    private function deleteDepartment()
    {
        $this->viewDepartments(false);
        $ol = Helper::maxRange('Pick a patient to delete: ', 1, count($this->departments));
        $ol--;
        array_splice($this->departments, $ol, 1);
        echo '                                    ' . PHP_EOL;
        echo '       __     __     __           __' . PHP_EOL;
        echo '  ____/ /__  / /__  / /____  ____/ /' . PHP_EOL;
        echo ' / __  / _ \/ / _ \/ __/ _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ /  __/ /  __/ /_/  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/\___/_/\___/\__/\___/\__,_/   ' . PHP_EOL;
        echo '                                    ' . PHP_EOL;

        $this->displayDepartmentsMenu();
    }

    private function addMedicalRecord()
    {
        $m = new stdClass();
        $m->date = Helper::validateDate('Enter the date of the doctors visit: ');
        $m->diagnosis = Helper::validateNoNumericals('Enter patients diagnosis: ');
        $m->patient_id = Helper::validateOnlyNumericals('Enter patients id: ');


        $this->medicalRecords[] = $m;
        echo '                                ' . PHP_EOL;
        echo '             __    __         __' . PHP_EOL;
        echo '  ____ _____/ /___/ /__  ____/ /' . PHP_EOL;
        echo ' / __ `/ __  / __  / _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ / /_/ / /_/ /  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/\__,_/\__,_/\___/\__,_/   ' . PHP_EOL;
        echo '                                ' . PHP_EOL;
        $this->displayMedicalRecordsMenu();
    }

    private function viewMedicalRecords($displayMedicalRecords = true)
    {
        echo '--------------------' . PHP_EOL;
        echo 'Medical records: ' . PHP_EOL;
        $ol = 1;
        foreach ($this->medicalRecords as $medicalRecord) {
            echo $ol++ . '. ' . 'Patients ID: ' . $medicalRecord->patient_id . ' ' . '||' . ' Date: ' . $medicalRecord->date . ' ' . '|| Diagnosis: ' . $medicalRecord->diagnosis . PHP_EOL;
        }
        echo '--------------------' . PHP_EOL;
        if ($displayMedicalRecords) {
            $this->displayMedicalRecordsMenu();

        }
    }

    private function updateMedicalRecord()
    {
        $this->viewMedicalRecords(false);
        $ol = Helper::maxRange('Pick a medical record to update: ', 1, count($this->medicalRecords));
        $ol--;
        $this->medicalRecords[$ol]->patient_id = Helper::validateOnlyNumericals('Enter new patients id (' .
            $this->medicalRecords[$ol]->patient_id
            . '): ', $this->medicalRecords[$ol]->patient_id);
        $this->medicalRecords[$ol]->patient_id = Helper::validateDate('Enter new department date (' .
            $this->medicalRecords[$ol]->date
            . '): ', $this->medicalRecords[$ol]->date);
        $this->medicalRecords[$ol]->diagnosis = Helper::validateNoNumericals('Enter updated diagnosis (' .
            $this->medicalRecords[$ol]->diagnosis
            . '): ', $this->medicalRecords[$ol]->diagnosis);
        echo '                                          ' . PHP_EOL;
        echo '                   __      __           __' . PHP_EOL;
        echo '  __  ______  ____/ /___ _/ /____  ____/ /' . PHP_EOL;
        echo ' / / / / __ \/ __  / __ `/ __/ _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ / /_/ / /_/ / /_/ / /_/  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/ .___/\__,_/\__,_/\__/\___/\__,_/   ' . PHP_EOL;
        echo '    /_/                                   ' . PHP_EOL;
        echo '                                          ' . PHP_EOL;
        $this->displayMedicalRecordsMenu();
    }

    private function deleteMedicalRecord()
    {
        $this->viewMedicalRecords(false);
        $ol = Helper::maxRange('Pick a medical record to delete: ', 1, count($this->medicalRecords));
        $ol--;
        array_splice($this->medicalRecords, $ol, 1);
        echo '                                    ' . PHP_EOL;
        echo '       __     __     __           __' . PHP_EOL;
        echo '  ____/ /__  / /__  / /____  ____/ /' . PHP_EOL;
        echo ' / __  / _ \/ / _ \/ __/ _ \/ __  / ' . PHP_EOL;
        echo '/ /_/ /  __/ /  __/ /_/  __/ /_/ /  ' . PHP_EOL;
        echo '\__,_/\___/_/\___/\__/\___/\__,_/   ' . PHP_EOL;
        echo '                                    ' . PHP_EOL;

        $this->displayMedicalRecordsMenu();
    }

    private function testData()
    {
        $this->patients[] = $this->createPatient('Meho', 'Puzic', 'Tome Zdravkovica 30', '12345678912', 1);
        $this->patients[] = $this->createPatient('Berka', 'Berishevic', 'Serifa Konjevica 20', '12345678912', 1);

        $this->visitors[] = $this->createVisitor('Himzo', 'Polovina', 'Arsena Dedica 600', 12345678912);
        $this->visitors[] = $this->createVisitor('Kicho', 'Slabinac', 'Serifa Konjevica 20', 12345678912);

        $this->departments[] = $this->createDepartment('Kardiologija', 20);
        $this->departments[] = $this->createDepartment('Psihijatrija', 10);

//        $this->doctors[] = $this->createDoctor('Mladen', 'Grdovic', 'Psihijatar', 12345678912);




    }

    private function createPatient($firstName, $lastName, $address, $oib, $doctor_id)
    {
        $s = new stdClass();
        $s->firstName = $firstName;
        $s->lastName = $lastName;
        $s->address = $address;
        $s->oib = $oib;
        $s->doctor_id = $doctor_id;
        return $s;
    }

    private function createVisitor($firstName, $lastName, $address, $phoneNumber)
    {
        $s = new stdClass();
        $s->firstName = $firstName;
        $s->lastName = $lastName;
        $s->address = $address;
        $s->phoneNumber = $phoneNumber;

        return $s;
    }

    public function createDepartment($departmentName, $numberOfRooms)
    {
        $s = new stdClass();
        $s->departmentName = $departmentName;
        $s->numberOfRooms = $numberOfRooms;



        return $s;
    }

    private function createDoctor($firstName, $lastName, $specialization, $oib, $department)
    {
        $s = new stdClass();
        $s->firstName = $firstName;
        $s->lastName = $lastName;
        $s->specialization = $specialization;
        $s->oib = $oib;
        $s->departmentName = $department->departmentName;



        return $s;
    }


//    private function testData(){
//
//        $this->patients[]=$this->createPatient('Mila','Agic', 'Marka Marulica 98', '12312312312', '1');
//        $this->patients[]=$this->createPatient('Lisa','Agic', 'Marka Marulica 98', '12312312312', '1');
//
//
//
//
//        $this->visitors[]=$this->createVisitor('Luka','Agic', 'Ivana Gundulica 12', '1665498');
//        $this->visitors[]=$this->createVisitor('Jona','Agic', 'Ivana Gundulica 12', '1665498');
//
//
//    }
//
//    private function createPatient($firstName,$lastName,$address,$oib,$doctor_id){
//        $p = new stdClass();
//        $p->firstName = $firstName;
//        $p->lastName = $lastName;
//        $p->address = $address;
//        $p->oib = $oib;
//        $p->doctor_id = $doctor_id;
//
//        return $p;
//    }
//
//    private function createVisitor($firstName,$lastName,$address,$phoneNumber){
//        $s = new stdClass();
//        $s->firstName=$firstName;
//        $s->lastName=$lastName;
//        $s->address=$address;
//        $s->phoneNumber=$phoneNumber;
//
//
//        return $s;
//    }



}

new Start2;