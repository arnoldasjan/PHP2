<?php


namespace Nfq\Academy;


class Reservation
{
    private $startDate;
    private $endDate;
    private $guest;

    public function __construct(\DateTime $startDate, \DateTime $endDate, Guest $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function getGuest()
    {
        return $this->guest;
    }

    public function __toString() : string
    {
        $answer = "Reservation for $this->guest";
        return $answer;
    }
}