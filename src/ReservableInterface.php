<?php


namespace Nfq\Academy;


interface ReservableInterface
{
    public function addReservation($reservation): void;

    public function removeReservation($reservation): void;
}