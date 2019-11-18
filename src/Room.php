<?php


namespace Nfq\Academy;


class Room implements ReservableInterface
{
    private $roomType;
    private $hasRestroom;
    private $hasBalcony;
    private $bedCount;
    private $roomNumber;
    private $extras;
    private $price;
    private $reservations = [];

    public function __construct(string $roomType, bool $hasRestroom, bool $hasBalcony, int $bedCount, int $roomNumber, array $extras, float $price)
    {
        $this->roomType = $roomType;
        $this->hasRestroom = $hasRestroom;
        $this->hasBalcony = $hasBalcony;
        $this->bedCount = $bedCount;
        $this->roomNumber = $roomNumber;
        $this->extras = $extras;
        $this->price = $price;
    }

    public function addReservation($reservation): void
    {
        array_push($this->reservations, $reservation);
    }

    public function removeReservation($reservation): void
    {
        if (($key = array_search($reservation, $this->reservations)) !== false) {
            unset($this->reservations[$key]);
        }
    }

    public function getRoomType(): string
    {
        return $this->roomType;
    }

    public function isHasRestroom(): bool
    {
        return $this->hasRestroom;
    }

    public function isHasBalcony(): bool
    {
        return $this->hasBalcony;
    }

    public function getBedCount(): int
    {
        return $this->bedCount;
    }

    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }

    public function getExtras(): array
    {
        return $this->extras;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function __toString() : string
    {
        $answer = "Number of room is $this->roomNumber\r\n";
        return $answer;
    }

    public function getReservations(): array
    {
        return $this->reservations;
    }
}