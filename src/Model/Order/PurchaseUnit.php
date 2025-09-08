<?php

namespace Numiscorner\MarketplaceBundle\Model\Order;

class PurchaseUnit
{
    /**
     * @var string
     */
    public $referenceId;

    /**
     * @var Payment[]|null
     */
    public $payments;

    public function getReferenceId(): string
    {
        return $this->referenceId;
    }

    public function setReferenceId(string $referenceId): void
    {
        $this->referenceId = $referenceId;
    }

    public function getPayments(): ?array
    {
        return $this->payments;
    }

    public function setPayments(?array $payments): void
    {
        $this->payments = $payments;
    }
}