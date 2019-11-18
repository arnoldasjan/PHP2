<?php


namespace Nfq\Academy;


class BookingManager
{
    public static function bookRoom(Room $room, Reservation $reservation)
    {
        $room->addReservation($reservation);

        $nr = $room->getRoomNumber();
        $firstn = $reservation->getGuest()->getFirstName();
        $lastn = $reservation->getGuest()->getLastName();
        $startd = $reservation->getStartDate()->format('Y-m-d');
        $endd = $reservation->getEndDate()->format('Y-m-d');

        echo "Room <strong>$nr</strong> successfully booked for <strong>$firstn $lastn</strong>\r\nfrom <time>$startd</time> to <time>$endd</time>!\r\n";
    }

    public static function unbookRoom(Room $room, Reservation $reservation)
    {
        $room->removeReservation($reservation);
        echo "Reservation was successfully canceled!";
    }
}