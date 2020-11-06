<?php


namespace Numiscorner\MarketplaceBundle\Model\Payment;

use Numiscorner\MarketplaceBundle\Model\GenericModelInterface;

class Payment implements GenericModelInterface
{
    /** @var string $orderReference */
    protected $orderReference;
    /** @var string $paymentMethod */
    protected $paymentMethod;
    /** @var string $currencyCode */
    protected $currencyCode;
    /** @var float $amount */
    protected $amount;
    /** @var string $operationType */
    protected $operationType;
    /** @var string */
    protected $orderStatus;

    public const CREDIT = 'credit';
    public const DEBIT = 'debit';

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
     * @return string
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     */
    public function setPaymentMethod(string $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode(string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return float
     */
    public function getAmount(): ?float
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
    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    /**
     * @param string $operationType
     */
    public function setOperationType(string $operationType): void
    {
        $this->operationType = $operationType;
    }

    /**
     * @return string
     */
    public function getOrderStatus(): ?string
    {
        return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
     */
    public function setOrderStatus(string $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }
}
