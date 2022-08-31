<?php

namespace MenjadiProgrammerHandal\Belajar;


class Customer {

    public function __construct(private string $name)
    {
        
    }

    public function sayHalo(string $name="Tamu"): string{

        return "Helo $name, Nama saya adalah $this->name";

    }
}