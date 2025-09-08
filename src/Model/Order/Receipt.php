<?php

namespace Numiscorner\MarketplaceBundle\Model\Order;

class Receipt
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $intent;

    /**
     * @var string
     */
    public $status;

    /**
     * @var PurchaseUnit[]|null
     */
    public $purchaseUnits;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getIntent(): string
    {
        return $this->intent;
    }

    public function setIntent(string $intent): void
    {
        $this->intent = $intent;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getPurchaseUnits(): ?array
    {
        return $this->purchaseUnits;
    }

    public function setPurchaseUnits(?array $purchaseUnits): void
    {
        $this->purchaseUnits = $purchaseUnits;
    }
}