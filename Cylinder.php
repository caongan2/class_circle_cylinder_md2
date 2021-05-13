<?php


class Cylinder extends Circle
{
    public int|float $height;

    public function __construct(float|int $radius, int|float $height, string $color)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function calculateVolume(): int|float
    {
        return parent::calculateARea() * $this->height;
    }

    public function calculateARea(): int|float
    {
        return parent::calculateARea() * 2 + parent::calculatePerameter() * $this->height;
    }
}