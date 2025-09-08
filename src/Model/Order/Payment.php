<?php

namespace Numiscorner\MarketplaceBundle\Model\Order;

class Payment
{
    /**
     * @var Capture[]|null
     */
    public $captures;

    public function getCaptures(): ?array
    {
        return $this->captures;
    }

    public function setCaptures(?array $captures): void
    {
        $this->captures = $captures;
    }
}