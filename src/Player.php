<?php

namespace App;

class Player
{
    public string_$name;

    public int $point = 0;

    public function __contruct(string $name)
    {
        $this->name = $name;
    }

    public function score()
    {
        $this->points++;
    }

    public function toTerm()
    {
        switch ($this->points) {
            case 0:
                return 'love';
            case 1:
                return 'fifteen';
            case 2:
                return 'thirty';
            case 3:
                return 'forty';
        }
    }
}