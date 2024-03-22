<?php

class degreeConversion
{
    private int $number = 0;
    private int $degree = 0;

    public function setNumber(int $number):void {
        $this->number = $number;
    }

    public function setDegree(int $degree):void {
        $this->degree = $degree;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getDegree() {
        return $this->degree;
    }

    public function grading(){
        $result = pow($this->number,$this->degree);
        return $result;
    }
}

$degreeConversion = new degreeConversion();

$degreeConversion->setNumber(2);
var_dump($degreeConversion->getNumber());
echo "<br>";
$degreeConversion->setDegree(30);
var_dump($degreeConversion->getDegree());
echo "<br>";
var_dump($degreeConversion->grading());
?>