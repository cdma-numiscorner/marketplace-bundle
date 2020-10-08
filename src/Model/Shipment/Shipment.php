<?php


namespace Numiscorner\MarketplaceBundle\Model\Shipment;


use Doctrine\Common\Collections\ArrayCollection;
use Numiscorner\MarketplaceBundle\Model\Product\Product;

class Shipment
{
    /** @var string $carrierName */
    protected $carrierName;
    /** @var bool $notifyCustomer */
    protected $notifyCustomer;
    /** @var string $trackingUrl */
    protected $trackingUrl;
    /** @var string $trackingNumber */
    protected $trackingNumber;
    /** @var ArrayCollection|Product */
    protected $products;

    public function __construct()
    {
        $this->notifyCustomer = false;
        $this->products = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getCarrierName(): string
    {
        return $this->carrierName;
    }

    /**
     * @param string $carrierName
     */
    public function setCarrierName(string $carrierName): void
    {
        $this->carrierName = $carrierName;
    }

    /**
     * @return bool
     */
    public function isNotifyCustomer(): bool
    {
        return $this->notifyCustomer;
    }

    /**
     * @param bool $notifyCustomer
     */
    public function setNotifyCustomer(bool $notifyCustomer): void
    {
        $this->notifyCustomer = $notifyCustomer;
    }

    /**
     * @return string
     */
    public function getTrackingUrl(): string
    {
        return $this->trackingUrl;
    }

    /**
     * @param string $trackingUrl
     */
    public function setTrackingUrl(string $trackingUrl): void
    {
        $this->trackingUrl = $trackingUrl;
    }

    /**
     * @return string
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     */
    public function setTrackingNumber(string $trackingNumber): void
    {
        $this->trackingNumber = $trackingNumber;
    }

    /**
     * @return ArrayCollection|Product
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param ArrayCollection|Product $products
     */
    public function setProducts($products): void
    {
        $this->products = $products;
    }

    public function addProduct(Product $product)
    {
        $this->products->add($product);
    }

    public function removeProduct(Product $product)
    {
        $this->products->removeElement($product);
    }
}
