<?php

include_once 'Helper.php';

class Start{

    private $courses;

    public function __construct() {
        $this->courses = [];
        $this->dataCourses();
        $this->greetingMessage();
        $this->mainMenu();
    }

    private function greetingMessage(){
        echo 'Welcome to my terminal APP';
    }

    private function mainMenu(){
        echo 'Main menu' . PHP_EOL;
        echo '1. Courses' . PHP_EOL;
        echo '2. Groups' . PHP_EOL;
        echo '3. Students' . PHP_EOL;
        echo '4. Teachers' . PHP_EOL;
        echo '5. Exit the app' . PHP_EOL;
        $this->chooseOptionMainMenu();
    }

    private function chooseOptionMainMenu(){
        switch (Helper::numberRange('Choose an option: ', 1,5)) {
            case 1:
                $this->courseMenu();
                break;
            case 2:
                $this->groupMenu();
            case 5:
                echo 'Goodbye' . PHP_EOL;
                break;
            default:
                $this->mainMenu();
        }
    }

    private function courseMenu(){
        echo 'Course menu' . PHP_EOL;
        echo '1. View courses' . PHP_EOL;
        echo '2. Enter new course' . PHP_EOL;
        echo '3. Update existing course' . PHP_EOL;
        echo '4. Delete existing course' . PHP_EOL;
        echo '5. Return to main menu' . PHP_EOL;
        $this->chooseOptionCourseMenu();
    }

    private function chooseOptionCourseMenu(){
        switch (Helper::numberRange('Choose an option: ', 1,5)) {
            case 1:
                $this->viewCourses();
                break;
            case 2:
                $this->newCourseEntry();
                break;
            case 5:
                $this->mainMenu();
                break;
            default:
                $this->courseMenu();
        }
    }

    private function groupMenu(){
        echo 'Group menu' . PHP_EOL;
        echo '1. View groups' . PHP_EOL;
        echo '2. Enter new group' . PHP_EOL;
        echo '3. Update existing group' . PHP_EOL;
        echo '4. Delete existing group' . PHP_EOL;
        echo '5. Return to main menu' . PHP_EOL;
        $this->chooseOptionGroupMenu();
    }

    private function chooseOptionGroupMenu(){
        switch (Helper::numberRange('Choose an option: ', 1,5)) {
            case 1:
                $this->groupMenuView();
                break;
            case 5:
                $this->mainMenu();
                break;
            default:
                $this->groupMenu();
        }
    }

    private function newCourseEntry(){
        $c = new stdClass();
        $c->name = Helper::textEntry('Enter new course name: ');
        $c->price = Helper::decimalNumberEntry('Enter new course price (use . as seperator)');

        $this->courses[]=$c;
        $this->courseMenu();
    }

    private function viewCourses(){
        echo '------------------' . PHP_EOL;
        echo 'Existing courses: ' . PHP_EOL;
        foreach ($this->courses as $course){
            echo $course->name . PHP_EOL;
        }
        echo '------------------' . PHP_EOL;
        $this->courseMenu();
    }


    private function dataCourses(){
        $this->courses[]=$this->createCourse('PHP programiranje', 900);
    }

    private function createCourse($name, $price){
        $s = new stdClass();
        $s->name=$name;
        $s->price=$price;
        return $s;

    }



}

new Start();