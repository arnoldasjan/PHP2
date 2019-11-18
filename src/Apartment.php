<?php


namespace Nfq\Academy;


class Apartment extends Room
{
    public function __construct(int $roomNumber, float $price)
    {
        parent::__construct('Diamond', true, true, 4, $roomNumber, ['TV', 'air-conditioner', 'refrigerator', 'kitchen box', 'mini-bar', 'bathtub', 'free Wi-fi'], $price);
    }
}