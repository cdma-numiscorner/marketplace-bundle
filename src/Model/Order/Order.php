<?php

namespace Numiscorner\MarketplaceBundle\Model\Order;

use Numiscorner\MarketplaceBundle\Model\Order\Cart\Item;
use Symfony\Component\Validator\Constraints as Assert;

class Order
{
    /** @var int */
    protected $id;

    /** @var bool */
    protected $buyerAcceptsMarketing;

    /**
     * @Assert\NotBlank()
     *
     * @var string
     */
    protected $marketCode;

    /**
     * @Assert\NotBlank()
     * @Assert\DateTime()
     *
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @Assert\NotBlank()
     * @Assert\Currency()
     *
     * @var string
     */
    protected $currency;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    protected $email;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    protected $financialStatus;

    /** @var string */
    protected $gateway;

    /** @var string */
    protected $name;

    /** @var string */
    protected $note;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("float")
     *
     * @var float
     */
    protected $subtotalPrice;

    /** @var bool */
    protected $taxesIncluded;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("float")
     *
     * @var float
     */
    protected $totalDiscounts;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("float")
     *
     * @var float
     */
    protected $totalLineItemsPrice;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("float")
     *
     * @var float
     */
    protected $totalPrice;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("float")
     *
     * @var float
     */
    protected $totalTax;

    /** @var int */
    protected $totalWeight;

    /** @var \DateTimeInterface */
    protected $updatedAt;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    protected $orderNumber;

    /** @var array|null */
    protected $discountCodes;

    /** @var array|null */
    protected $taxLines;

    /** @var mixed */
    protected $tax;

    /**
     * @Assert\Collection()
     * @Assert\Count(min="1")
     *
     * @var LineItem[]
     */
    protected $lineItems;

    /** @var Item[] */
    protected $shippingLines;

    /**
     * @Assert\Valid()
     * @Assert\NotBlank()
     *
     * @var CustomerAddress
     */
    protected $billingAddress;

    /**
     * @Assert\Valid()
     * @Assert\NotBlank()
     * @var CustomerAddress
     */
    protected $shippingAddress;

    /**
     * @Assert\NotBlank()
     * @Assert\Valid()
     *
     * @var Customer
     */
    protected $customer;

    /** @var string */
    protected $transactions;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getMarketCode()
    {
        return $this->marketCode;
    }

    /**
     * @param string $marketCode
     */
    public function setMarketCode($marketCode)
    {
        $this->marketCode = $marketCode;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFinancialStatus()
    {
        return $this->financialStatus;
    }

    /**
     * @param string $financialStatus
     */
    public function setFinancialStatus($financialStatus)
    {
        $this->financialStatus = $financialStatus;
    }

    /**
     * @return string
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * @param string $gateway
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return float
     */
    public function getSubtotalPrice()
    {
        return $this->subtotalPrice;
    }

    /**
     * @param float $subtotalPrice
     */
    public function setSubtotalPrice($subtotalPrice)
    {
        $this->subtotalPrice = $subtotalPrice;
    }

    /**
     * @return bool
     */
    public function isTaxesIncluded()
    {
        return $this->taxesIncluded;
    }

    /**
     * @param bool $taxesIncluded
     */
    public function setTaxesIncluded($taxesIncluded)
    {
        $this->taxesIncluded = $taxesIncluded;
    }

    /**
     * @return float
     */
    public function getTotalDiscounts()
    {
        return $this->totalDiscounts;
    }

    /**
     * @param float $totalDiscounts
     */
    public function setTotalDiscounts($totalDiscounts)
    {
        $this->totalDiscounts = $totalDiscounts;
    }

    /**
     * @return float
     */
    public function getTotalLineItemsPrice()
    {
        return $this->totalLineItemsPrice;
    }

    /**
     * @param float $totalLineItemsPrice
     */
    public function setTotalLineItemsPrice($totalLineItemsPrice)
    {
        $this->totalLineItemsPrice = $totalLineItemsPrice;
    }

    /**
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param float $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return float
     */
    public function getTotalTax()
    {
        return $this->totalTax;
    }

    /**
     * @param float $totalTax
     */
    public function setTotalTax($totalTax)
    {
        $this->totalTax = $totalTax;
    }

    /**
     * @return int
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    /**
     * @param int $totalWeight
     */
    public function setTotalWeight($totalWeight)
    {
        $this->totalWeight = $totalWeight;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return array
     */
    public function getDiscountCodes()
    {
        return $this->discountCodes;
    }

    /**
     * @param array $discountCodes
     */
    public function setDiscountCodes($discountCodes)
    {
        $this->discountCodes = $discountCodes;
    }

    /**
     * @return LineItem[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * @param LineItem[] $lineItems
     */
    public function setLineItems($lineItems)
    {
        $this->lineItems = $lineItems;
    }

    /**
     * @return Item[]
     */
    public function getShippingLines()
    {
        return $this->shippingLines;
    }

    /**
     * @param Item[] $shippingLines
     */
    public function setShippingLines($shippingLines)
    {
        $this->shippingLines = $shippingLines;
    }

    /**
     * @return CustomerAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param CustomerAddress $billingAddress
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @return CustomerAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param CustomerAddress $shippingAddress
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }


}
