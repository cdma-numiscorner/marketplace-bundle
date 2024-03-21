<?php

namespace Numiscorner\MarketplaceBundle\Model\Order;

class TaxLine
{


    /** @var string */
    protected $title;

    /** @var float */
    protected $rate;

    /**
     *
     * @var PriceSet|null
     */
    protected $priceSet;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @return PriceSet
     */
    public function getPriceSet(): ?PriceSet
    {
        return $this->priceSet;
    }

    /**
     * @param PriceSet $priceSet
     */
    public function setPriceSet(?PriceSet $priceSet): void
    {
        $this->priceSet = $priceSet;
    }
}
