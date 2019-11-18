<?php


namespace Nfq\Academy;


class Bedroom extends Room
{
    public function __construct(int $roomNumber, float $price)
    {
        parent::__construct('Gold', true, true, 2, $roomNumber, ['TV', 'air-conditioner', 'refrigerator', 'mini-bar', 'bathtub'], $price);
    }
}