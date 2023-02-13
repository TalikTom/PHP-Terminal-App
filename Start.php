<?php

include_once 'Helper.php';

class Start
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
                if (count($this->medicalRecords) === 0) {
                    echo PHP_EOL;
                    echo '-- There is no existing medical records --' . PHP_EOL;
                    $this->displayMedicalRecordsMenu();
                } else {
                    $this->viewMedicalRecords();
                }
                break;
            case 2:
                $this->addMedicalRecord();
                break;
            case 3:
                if (count($this->medicalRecords) === 0) {
                    echo PHP_EOL;
                    echo '-- There is no existing medical records --' . PHP_EOL;
                    $this->displayMedicalRecordsMenu();
                } else {
                    $this->updateMedicalRecord();
                }
                break;
            case 4:
                if (count($this->medicalRecords) === 0) {
                    echo PHP_EOL;
                    echo '-- There is no existing medical records --' . PHP_EOL;
                    $this->displayMedicalRecordsMenu();
                } else {
                    $this->deleteMedicalRecord();
                }
                break;

            case 5:
                $this->displayMainMenu();
                break;
            default:
                $this->displayMedicalRecordsMenu();
        }
    }

    /* -------
    Visitor beginning
    ---------*/

    private function viewVisitors($displayAppointments = true)
    {
        echo '--------------------' . PHP_EOL;
        echo 'Current visitors: ' . PHP_EOL;
        echo '--------------------' . PHP_EOL;
        $ol = 1;
        foreach ($this->visitors as $visitor) {
            echo $ol++ . '. ' . 'Name: ' . $visitor->firstName . ' ' . $visitor->lastName . PHP_EOL . '   Address: ' . $visitor->address . PHP_EOL . '   Phone number: ' . $visitor->phoneNumber . PHP_EOL;
            echo '--------------------' . PHP_EOL;
        }

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


    /* -------
    Visitor end
    ---------*/

    /* -------
    Visitations beginning
    ---------*/

    private function viewVisitations($displayVisitations = true)
    {
        echo '--------------------' . PHP_EOL;
        echo 'Current visitors: ' . PHP_EOL;
        echo '--------------------' . PHP_EOL;
        $ol = 1;
        foreach ($this->visitations as $visitation) {
            echo $ol++ . '. ' . 'Date: ' . $visitation->date . PHP_EOL . '   Time: ' . $visitation->time . PHP_EOL . '   Patient: ' . $visitation->patients->firstName . ' ' . $visitation->patients->lastName . PHP_EOL . '   Visitor: ' . $visitation->visitors->firstName . ' ' .  $visitation->visitors->lastName . PHP_EOL;
            echo '--------------------' . PHP_EOL;
        }
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


    /* -------
    Visitations end
    ---------*/

    /* -------
    PATIENTS beginning
    ---------*/

    private function viewPatients($displayPatients = true)
    {

        echo '--------------------' . PHP_EOL;
        echo 'Current patients: ' . PHP_EOL;
        echo '--------------------' . PHP_EOL;
        $rb = 1;

        foreach ($this->patients as $p) {
            echo $rb++ . '. ' . 'Name: ' . $p->firstName . ' ' . $p->lastName . PHP_EOL . '   Address: ' . $p->address . PHP_EOL . '   OIB: ' . $p->oib . ' ' . PHP_EOL . '   Doctor: ' . $p->doctors->firstName . ' ' . $p->doctors->lastName . PHP_EOL;
            echo '--------------------' . PHP_EOL;
        }

        if ($displayPatients) {
            $this->displayPatientsMenu();
        }

    }


    private function addPatient()
    {
        $p = new stdClass();
        $p->firstName = Helper::validateNoNumericals('Enter first name of the patient: ');
        $p->lastName = Helper::validateNoNumericals('Enter last name of the patient: ');
        $p->address = Helper::textEntry('Enter patients address: ');
        $p->oib = Helper::validateOIB('Enter patients oib: ');

        while (true) {
            $this->viewDoctors(false);
            $rb = Helper::maxRange('Choose a doctor: ', 1, count($this->doctors));
            $rb--;
            $p->doctors[] = $this->doctors[$rb];
            break;

        }


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

        $this->viewDoctors(false);
        $rb2 = Helper::maxRange('Choose a patient: ', 1, count($this->doctors));
        $rb2--;
        $this->patients[$ol]->doctors = $this->doctors[$rb2];

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

    /* -------
    PATIENTS end
    ---------*/

    /* -------
    Doctor beginning
    ---------*/

    private function viewDoctors($displayDoctors = true)
    {
        echo '--------------------' . PHP_EOL;
        echo 'Doctors: ' . PHP_EOL;
        echo '--------------------' . PHP_EOL;
        $rb = 1;

        foreach ($this->doctors as $v) {
            echo $rb++ . '. ' . 'Name: ' . $v->firstName . ' ' . $v->lastName . PHP_EOL . '   Specialization: ' . $v->specialization . PHP_EOL . '   OIB: ' . $v->oib . PHP_EOL . '   Department: ' . $v->departments->departmentName . PHP_EOL;
            echo '--------------------' . PHP_EOL;
        }

        if ($displayDoctors) {
            $this->displayDoctorsMenu();
        }
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
        $this->doctors[$rb]->department = $this->departments[$rb1];


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

    /* -------
    Doctor end
    ---------*/

    /* -------
    Department beginning
    ---------*/

    private function viewDepartments($displayDepartments = true)
    {
        echo '--------------------' . PHP_EOL;
        echo 'Current departments' . PHP_EOL;
        echo '--------------------' . PHP_EOL;
        $ol = 1;
        foreach ($this->departments as $department) {
            echo $ol++ . '. ' . 'Department name: ' . $department->departmentName . PHP_EOL . '   Total rooms: ' . $department->numberOfRooms . PHP_EOL;
            echo '--------------------' . PHP_EOL;
        }

        if ($displayDepartments) {
            $this->displayDepartmentsMenu();
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

    /* -------
    Department end
    ---------*/

    /* -------
    Medical Record beginning
    ---------*/

    private function viewMedicalRecords($displayMedicalRecords = true)
    {
        echo '--------------------' . PHP_EOL;
        echo 'Medical records: ' . PHP_EOL;
        echo '--------------------' . PHP_EOL;
        $ol = 1;
        foreach ($this->medicalRecords as $medicalRecord) {
            echo $ol++ . '. ' . ' Date: ' . $medicalRecord->date . PHP_EOL . '    ' . 'Patient: ' . $medicalRecord->patients->firstName . ' ' . $medicalRecord->patients->lastName . PHP_EOL . '    Diagnosis: ' . $medicalRecord->diagnosis  . PHP_EOL;
            echo '--------------------' . PHP_EOL;

        }

        if ($displayMedicalRecords) {
            $this->displayMedicalRecordsMenu();

        }
    }


    private function addMedicalRecord()
    {
        $m = new stdClass();
        $m->date = Helper::validateDateInput('Enter the date of the doctors visit (yyyy-mm-dd): ');
        $m->diagnosis = Helper::validateNoNumericals('Enter patients diagnosis: ');

        while (true) {
            $this->viewPatients(false);
            $rb = Helper::maxRange('Choose a patient: ', 1, count($this->patients));
            $rb--;
            $m->patients[] = $this->patients[$rb];
            break;

        }


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


    private function updateMedicalRecord()
    {
        $this->viewMedicalRecords(false);
        $ol = Helper::maxRange('Pick a medical record to update: ', 1, count($this->medicalRecords));
        $ol--;
        $this->medicalRecords[$ol]->date = Helper::validateDateInput('Enter new medical record date (' .
            $this->medicalRecords[$ol]->date
            . '): ', $this->medicalRecords[$ol]->date);
        $this->medicalRecords[$ol]->diagnosis = Helper::validateNoNumericals('Enter updated diagnosis (' .
            $this->medicalRecords[$ol]->diagnosis
            . '): ', $this->medicalRecords[$ol]->diagnosis);


        $this->viewPatients(false);
        $rb2 = Helper::maxRange('Choose a patient: ', 1, count($this->patients));
        $rb2--;
        $this->medicalRecords[$ol]->patient = $this->patients[$rb2];
//        print_r($this->medicalRecords[$ol]->patient);
//        print_r($this->patients[$rb2]);

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

    /* -------
    Medical Record end
    ---------*/

    /* -------
    Test data beginning
    ---------*/


    public function testData()
    {


        $this->departments[] = $this->createDepartment('Cardiology', 20);
        $this->departments[] = $this->createDepartment('Psychiatry', 10);

        $this->doctors[] = $this->createDoctor('Ibrica', 'Jusic', 'Cardiology', 12365478912, $this->departments[0]);
        $this->doctors[] = $this->createDoctor('Kemal', 'Monteno', 'Psychiatry', 12365478912, $this->departments[1]);

        $this->patients[] = $this->createPatient('Ciro', 'Gasparac', 'Tome Zdravkovica 30', '12345678912', $this->doctors[0]);
        $this->patients[] = $this->createPatient('Djenka', 'Djuric', 'Serifa Konjevica 20', '12345678912', $this->doctors[1]);

        $this->visitors[] = $this->createVisitor('Himzo', 'Polovina', 'Arsena Dedica 600', 12345678912);
        $this->visitors[] = $this->createVisitor('Kicho', 'Slabinac', 'Serifa Konjevica 20', 12345678912);

        $this->medicalRecords[] = $this->createMedicalRecord('2023-05-05', 'Dead', $this->patients[0]);
        $this->medicalRecords[] = $this->createMedicalRecord('2023-06-06', 'Alive', $this->patients[1]);

        $this->visitations[] = $this->createVisitation('2023-06-06', '16:00', $this->patients[0], $this->visitors[0]);
        $this->visitations[] = $this->createVisitation('2023-06-06', '15:00', $this->patients[1], $this->visitors[1]);



    }

    private function createPatient($firstName, $lastName, $address, $oib, $doctors)
    {
        $s = new stdClass();
        $s->firstName = $firstName;
        $s->lastName = $lastName;
        $s->address = $address;
        $s->oib = $oib;
        $s->doctors = $doctors;


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

    private function createDoctor($firstName, $lastName, $specialization, $oib, $departments)
    {
        $s = new stdClass();
        $s->firstName = $firstName;
        $s->lastName = $lastName;
        $s->specialization = $specialization;
        $s->oib = $oib;
        $s->departments = $departments;


        return $s;


    }

    private function createMedicalRecord($date, $diagnosis, $patients)
    {
        $s = new stdClass();
        $s->date = $date;
        $s->diagnosis = $diagnosis;
        $s->patients = $patients;

        return $s;
    }
    private function createVisitation($date, $time, $patients, $visitors)
    {
        $s = new stdClass();
        $s->date = $date;
        $s->time = $time;
        $s->patients = $patients;
        $s->visitors = $visitors;

        return $s;
    }

    /* -------
    Test data end
    ---------*/



}

new Start;