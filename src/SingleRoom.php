<?php


namespace Nfq\Academy;


class SingleRoom extends Room
{
    public function __construct(int $roomNumber, float $price)
    {
        parent::__construct('Standard', true, false, 1, $roomNumber, ['TV', 'air-conditioner'], $price);
    }
}