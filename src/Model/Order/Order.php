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
     *
     * @var PriceSet|null
     */
    protected $subtotalPriceSet;

    /** @var bool */
    protected $taxesIncluded;

    /**
     *
     * @var PriceSet|null
     */
    protected $totalDiscountsSet;

    /**
     *
     * @var PriceSet|null
     */
    protected $totalLineItemsPriceSet;

    /**
     *
     * @var PriceSet|null
     */
    protected $totalPriceSet;

    /**
     *
     * @var PriceSet|null
     */
    protected $totalTaxSet;

    /** @var int */
    protected $totalWeight;

    /** @var \DateTimeInterface|null */
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

    /**
     * @var NoteAttribute[]|null
     */
    protected $noteAttributes;

    /**
     * @Assert\Collection()
     *
     * @var LineItem[]|null
     */
    protected $services;

    /** @var Item[]|null */
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

    /** @var Transaction[]|null */
    protected $transactions;

    /** @var bool */
    protected $isRisky = false;

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

    /**
     * @return LineItem[]|null
     */
    public function getServices()
    {
        return $this->services;
    }

    public function addService($service)
    {
        array_push($this->services, $service);
    }

    /**
     * @param LineItem[] $services
     */
    public function setServices($services)
    {
        $this->services = $services;
    }

    /**
     * @return Transaction[]|null
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @param Transaction[]|null $transactions
     */
    public function setTransactions($transactions)
    {
        $this->transactions = $transactions;
    }

    /**
     * @return bool
     */
    public function isRisky()
    {
        return $this->isRisky;
    }

    /**
     * @param bool $isRisky
     */
    public function setIsRisky($isRisky)
    {
        $this->isRisky = $isRisky;
    }

    /**
     * @return NoteAttribute[]|null
     */
    public function getNoteAttributes()
    {
        return $this->noteAttributes;
    }

    public function addNoteAttribute($noteAttribute)
    {
        array_push($this->noteAttributes, $noteAttribute);
    }

    /**
     * @param NoteAttribute[] $noteAttributes
     */
    public function setNoteAttributes($noteAttributes)
    {
        $this->noteAttributes = $noteAttributes;
    }

    public function getSubtotalPriceSet(): ?PriceSet
    {
        return $this->subtotalPriceSet;
    }

    public function setSubtotalPriceSet(?PriceSet $subtotalPriceSet): void
    {
        $this->subtotalPriceSet = $subtotalPriceSet;
    }

    public function getTotalDiscountsSet(): ?PriceSet
    {
        return $this->totalDiscountsSet;
    }

    public function setTotalDiscountsSet(?PriceSet $totalDiscountsSet): void
    {
        $this->totalDiscountsSet = $totalDiscountsSet;
    }

    public function getTotalLineItemsPriceSet(): ?PriceSet
    {
        return $this->totalLineItemsPriceSet;
    }

    public function setTotalLineItemsPriceSet(?PriceSet $totalLineItemsPriceSet): void
    {
        $this->totalLineItemsPriceSet = $totalLineItemsPriceSet;
    }

    public function getTotalPriceSet(): ?PriceSet
    {
        return $this->totalPriceSet;
    }

    public function setTotalPriceSet(?PriceSet $totalPriceSet): void
    {
        $this->totalPriceSet = $totalPriceSet;
    }

    public function getTotalTaxSet(): ?PriceSet
    {
        return $this->totalTaxSet;
    }

    public function setTotalTaxSet(?PriceSet $totalTaxSet): void
    {
        $this->totalTaxSet = $totalTaxSet;
    }
}
