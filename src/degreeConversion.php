<?php

namespace src;

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
