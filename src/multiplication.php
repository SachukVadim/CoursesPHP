<?php

namespace src;

class multiplication  extends degreeconversion {

    public int $multiplication = 18;

    public function getNumber1() {
        return parent::getNumber() * $this->multiplication;
    }

    public function getDegree1() {
        return parent::getDegree() * $this->multiplication;
    }
}
