<?php

namespace src;

class addition extends degreeconversion{

    public int $addition = 188888888;

    public function getNumber2(): int {
        return parent::getNumber() + $this->addition;
    }

    public function getDegree2(): int {
        return parent::getDegree() + $this->addition;
    }
}
