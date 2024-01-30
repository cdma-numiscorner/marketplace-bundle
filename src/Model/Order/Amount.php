<?php

namespace Numiscorner\MarketplaceBundle\Model\Order;

class Amount
{
    /**
     * @var float
     */
    protected $amount;


    /**
     * @var string
     */
    protected $currency_code;

    public function __construct($amount = null, $currency_code = null)
    {
        $this->amount = $amount;
        $this->currency_code =$currency_code;
    }


    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currency_code;
    }

    /**
     * @param string $currency_code
     */
    public function setCurrencyCode(string $currency_code): void
    {
        $this->currency_code = $currency_code;
    }
}