<?php


namespace Numiscorner\MarketplaceBundle\Model\Shipment;

use Numiscorner\MarketplaceBundle\Model\GenericModelInterface;

class Shipment implements GenericModelInterface
{
    /** @var string $orderReference */
    protected $orderReference;
    /** @var string $carrierName */
    protected $carrierName;
    /** @var bool $notifyCustomer */
    protected $notifyCustomer;
    /** @var string $trackingUrl */
    protected $trackingUrl;
    /** @var string $trackingNumber */
    protected $trackingNumber;
    /** @var array $skus */
    protected $skus;

    public function __construct()
    {
        $this->notifyCustomer = false;
        $this->skus = [];
    }

    /**
     * @return string
     */
    public function getCarrierName(): ?string
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
    public function isNotifyCustomer(): ?bool
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
    public function getTrackingUrl(): ?string
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
    public function getTrackingNumber(): ?string
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
     * @return string
     */
    public function getOrderReference(): ?string
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     */
    public function setOrderReference(string $orderReference): void
    {
        $this->orderReference = $orderReference;
    }

    /**
     * @return array
     */
    public function getSkus(): array
    {
        return $this->skus;
    }

    /**
     * @param array $skus
     */
    public function setSkus(array $skus): void
    {
        $this->skus = $skus;
    }

    public function addSku(string $sku)
    {
        $this->skus[] = $sku;
    }
}
