<?php

namespace Numiscorner\MarketplaceBundle\Model\Order;

class PriceSet
{

    /**
     * @var Amount
     */
    protected $shopMoney;


    /**
     * @var Amount
     */
    protected $presentmentMoney;

    /**
     * @return Amount
     */
    public function getShopMoney(): Amount
    {
        return $this->shopMoney;
    }

    /**
     * @param Amount $shopMoney
     */
    public function setShopMoney(Amount $shopMoney): void
    {
        $this->shopMoney = $shopMoney;
    }

    /**
     * @return Amount
     */
    public function getPresentmentMoney(): Amount
    {
        return $this->presentmentMoney;
    }

    /**
     * @param Amount $presentmentMoney
     */
    public function setPresentmentMoney(Amount $presentmentMoney): void
    {
        $this->presentmentMoney = $presentmentMoney;
    }
}