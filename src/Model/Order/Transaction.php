<?php

namespace Numiscorner\MarketplaceBundle\Model\Order;

use Symfony\Component\Validator\Constraints as Assert;

class Transaction
{
    const TYPE_PAYPAL = 'paypal';
    const TYPE_CHECK = 'check';
    const TYPE_TRANSFER = 'transfer';
    const TYPE_CARD = 'card';
    const TYPE_OTHER = 'other';
    const TYPE_STRIPE = 'stripe';
    const TYPE_EBAY = 'ebay';
    const TYPE_ALLEGRO = 'allegro';
    const TYPE_ETSY = 'etsy';

    /** @var int */
    public $id;

    /** @var int */
    public $orderId;

    /**
     * @Assert\NotBlank()
     * @var float
     */
    public $amount;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    public $kind;

    /**
     * @Assert\NotBlank()
     * @Assert\Choice({
     *     Transaction::TYPE_PAYPAL,
     *     Transaction::TYPE_CHECK,
     *     Transaction::TYPE_TRANSFER,
     *     Transaction::TYPE_CARD,
     *     Transaction::TYPE_OTHER,
     *     Transaction::TYPE_STRIPE
     * })
     * @var string
     */
    public $gateway;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    public $status;

    /** @var string */
    public $message;

    /** @var \DateTimeInterface */
    public $createdAt;

    /** @var bool */
    public $test;

    /** @var string */
    public $authorization;

    /**
     * @Assert\NotBlank()
     * @Assert\Currency()
     *
     * @var string
     */
    public $currency;

    /** @var int */
    public $locationId;

    /** @var int */
    public $userId;

    /** @var int */
    public $parentId;

    /** @var mixed */
    public $deviceId;

    /** @var mixed */
    public $receipt;

    /** @var string */
    public $errorCode;

    /** @var string */
    public $sourceName;

    /** @var float */
    public $maximumRefundable;

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
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param string $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
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
     * @return bool
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * @param bool $test
     */
    public function setTest($test)
    {
        $this->test = $test;
    }

    /**
     * @return string
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    /**
     * @param string $authorization
     */
    public function setAuthorization($authorization)
    {
        $this->authorization = $authorization;
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
     * @return int
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * @param int $locationId
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }

    /**
     * @return mixed
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param mixed $deviceId
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
    }

    /**
     * @return mixed
     */
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     * @param mixed $receipt
     */
    public function setReceipt($receipt)
    {
        $this->receipt = $receipt;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getSourceName()
    {
        return $this->sourceName;
    }

    /**
     * @param string $sourceName
     */
    public function setSourceName($sourceName)
    {
        $this->sourceName = $sourceName;
    }

    /**
     * @return float
     */
    public function getMaximumRefundable()
    {
        return $this->maximumRefundable;
    }

    /**
     * @param float $maximumRefundable
     */
    public function setMaximumRefundable($maximumRefundable)
    {
        $this->maximumRefundable = $maximumRefundable;
    }
}
