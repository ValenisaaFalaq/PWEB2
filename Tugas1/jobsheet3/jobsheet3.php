<?php
// inheritance

class person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

class student extends person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }
    public function getName(){
        return $this->name;
    }
    public function getStudentID(){
        return $this->studentID;
    }
    public function setStudentID(){
        $this->studentID = $studentID;
    }
}

// polymorphism
class teacher extends person {
    private $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }
// overiding getname (child class mengimplementasikan method yang sudah ada di class induk)
    public function getName(){
        return $this->name;
    }

    public function getTeacherID() {
        return $this->teacherID;
    }
}

// abstraction

abstract class course {
    abstract public function  getCourseDetails();

}

class onlineCourse extends course{
    public function getCourseDetails() {
        return "ini adalah kelas online";
    }
}
class offlineCourse extends course{
    public function getCourseDetails() {
        return "ini adalah kelas offline";
    }
}

$student = new student ("Valenisaa Falaq", "230302094");
echo $student->getName();
echo "<br>";
echo $student->getStudentID();
echo "<hr>";

$teacher = new teacher ("Bpk. Abda'u", "78908909");
echo $teacher->getName();
echo "<br>";
echo $teacher->getTeacherID();
echo "<hr>";

$online = new onlineCourse();
echo $online->getCourseDetails();
echo "<hr>";

$offline = new offlineCourse();
echo $offline->getCourseDetails();


?>