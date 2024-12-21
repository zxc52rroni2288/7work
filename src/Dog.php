<?php

namespace AnimalProject;

class Dog extends Animal
{
    public function makeSound(): string
    {
        return "Гав";
    }

    public function getType(): string
    {
        return "Млекопитающее";
    }
}
