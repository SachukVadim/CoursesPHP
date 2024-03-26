<?php

namespace src;

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
