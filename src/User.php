<?php

namespace Acme;

class User
{

    private $distance;

    private $name;

    private $skill;

    public function __construct(string $name, float $skill, float $distance)
    {
        $this->name = $name;
        $this->skill = $skill;
        $this->distance = $distance;
    }

    public function getRating()
    {
        $skill = (float) min($this->skill, 10);

        $distance = (float) max(10 - $this->distance, 0);

        return $skill + $distance;
    }

    public function getDistance(): float
    {
        return $this->distance;
    }

    public function getSkill(): float
    {
        return $this->skill;
    }

}