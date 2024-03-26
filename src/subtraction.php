<?php

namespace src;

final class subtraction extends degreeconversion{

    public int $subtraction = 1888;

    public function getNumber(): int {
        return parent::getNumber() - $this->subtraction;
    }

    public function getDegree(): int {
        return parent::getDegree() - $this->subtraction;
    }
}
