<?php

class degreeConversion
{
    private int $number = 0;
    private int $degree = 0;

    public function __construct(int $number, int $degree ) {
        $this->number = $number;
        $this->degree = $degree;
    }

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

$degreeConversion = new degreeConversion(2,29);

var_dump($degreeConversion->grading());
echo "<br>";

//1) Создать родительский (главный класс)
//Класс должен содержать 2 свойства
//Каждое свойство должно иметь геттеры и сеттеры
//должен содержать абстрактную функцию возведения в степень

class multiplication  extends degreeconversion {

    public int $multiplication = 18;

    public function getNumber1() {
        return parent::getNumber() * $this->multiplication;
    }

    public function getDegree1() {
        return parent::getDegree() * $this->multiplication;
    }
}

$multiplication  = new multiplication (39,80);
var_dump($multiplication->getNumber1());
echo "<br>";
var_dump($multiplication->getDegree1());
echo "<br>";

class addition extends degreeconversion{

    public int $addition = 188888888;

    public function getNumber2(): int {
        return parent::getNumber() + $this->addition;
    }

    public function getDegree2(): int {
        return parent::getDegree() + $this->addition;
    }
}
$addition = new addition(389,38777);
var_dump($addition->getNumber2());
echo "<br>";
var_dump($addition->getDegree2());
echo "<br>";

final class subtraction extends degreeconversion{

    public int $subtraction = 1888;

    public function getNumber(): int {
        return parent::getNumber() - $this->subtraction;
    }

    public function getDegree(): int {
        return parent::getDegree() - $this->subtraction;
    }
}
$subtraction = new subtraction(16532,479653);
var_dump($subtraction->getNumber());
echo "<br>";
var_dump($subtraction->getDegree());
echo "<br>";

//2) Создать 3 наследника родительского класса
//Каждый наследник должен содержать одно свойство
//Каждое свойство должно иметь геттер и сеттер
//Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
//Один наследник не должен быть наследуемым

class multiplying extends multiplication {
    private int $multiplying = 0;

    public function setMultiplying(int $multiplying):void{
        $this->multiplying = $multiplying;
    }
    public function getMultiplying() {
        return $this->multiplying;
    }
    public function getNumber3(): int{
        return parent::getNumber1() * $this->multiplying;
    }
    public function getDegree3(): int {
        return parent::getDegree1() * $this->multiplying;
    }
    public function getNumber4(): int{
        return parent::getNumber1() * $this->multiplying;
    }
    public function getDegree4(): int{
        return parent::getNumber1() * $this->multiplying;
    }
}
$multiplying = new multiplying(75,96);
$multiplying->setMultiplying(852);
var_dump($multiplying->getNumber3());
var_dump($multiplying->getDegree3());
var_dump($multiplying->getNumber4());
var_dump($multiplying->getDegree4());
//Делать дальше ещё двух наследников нет смысла потому что там меняется лиш только символы и буквы а так одно и тоже будет

//3) Создать по 2 наследника от наследников первого уровня
//Каждое свойство должно иметь геттер и сеттер
//Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
//И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством
//В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции
?>