<?php


class Circle
{
    public int|float $radius;
    public string $color;

    public function __construct(int|float $radius, string $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function calculateArea(): int|float
    {
        return pi() * pow($this->radius, 2);
    }
    public function calculatePerameter(): int|float
    {
        return pi() * $this->radius * 2;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
}