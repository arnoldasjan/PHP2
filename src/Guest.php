<?php


namespace Nfq\Academy;


class Guest
{
    private $firstName;
    private $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function __toString() : string
    {
        $answer = "Client $this->firstName $this->lastName\r\n";
        return $answer;
    }
}