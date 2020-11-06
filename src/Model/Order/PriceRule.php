<?php

namespace Numiscorner\MarketplaceBundle\Model\Order;

class PriceRule
{


    /** @var int */
    protected $id;

    /** @var string */
    protected $title;

    /** @var string */
    protected $targetType;

    /** @var string */
    protected $targetSelection;

    /** @var string */
    protected $allocationMethod;

    /** @var int */
    protected $allocationLimit;

    /** @var string */
    protected $valueType;

    /** @var string */
    protected $value;

    /** @var bool */
    protected $oncePerCustomer;

    /** @var int */
    protected $usageLimit;

    /** @var string */
    protected $customerSelection;

    /** @var array */
    protected $prerequisiteSavedSearchIds;

    /** @var array */
    protected $prerequisiteCustomerIds;

    /** @var array */
    protected $prerequisiteSubtotalRange;

    /** @var array */
    protected $prerequisiteShippingPriceRange;

    /** @var array */
    protected $prerequisiteQuantityRange;

    /** @var array */
    protected $prerequisiteToEntitlementQuantityRatio;

    /** @var array */
    protected $prerequisiteVariantIds;

    /** @var array */
    protected $prerequisiteProductIds;

    /** @var array */
    protected $prerequisiteCollectionIds;

    /** @var array */
    protected $entitledProductIds;

    /** @var array */
    protected $entitledVariantIds;

    /** @var array */
    protected $entitledCollectionIds;

    /** @var array */
    protected $entitledCountryIds;

    /** @var string */
    protected $startsAt;

    /** @var string */
    protected $endsAt;

    /** @var string */
    protected $createdAt;

    /** @var string */
    protected $updatedAt;

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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTargetType()
    {
        return $this->targetType;
    }

    /**
     * @param string $targetType
     */
    public function setTargetType($targetType)
    {
        $this->targetType = $targetType;
    }

    /**
     * @return string
     */
    public function getTargetSelection()
    {
        return $this->targetSelection;
    }

    /**
     * @param string $targetSelection
     */
    public function setTargetSelection($targetSelection)
    {
        $this->targetSelection = $targetSelection;
    }

    /**
     * @return string
     */
    public function getAllocationMethod()
    {
        return $this->allocationMethod;
    }

    /**
     * @param string $allocationMethod
     */
    public function setAllocationMethod($allocationMethod)
    {
        $this->allocationMethod = $allocationMethod;
    }

    /**
     * @return int
     */
    public function getAllocationLimit()
    {
        return $this->allocationLimit;
    }

    /**
     * @param int $allocationLimit
     */
    public function setAllocationLimit($allocationLimit)
    {
        $this->allocationLimit = $allocationLimit;
    }

    /**
     * @return string
     */
    public function getValueType()
    {
        return $this->valueType;
    }

    /**
     * @param string $valueType
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return bool
     */
    public function getOncePerCustomer()
    {
        return $this->oncePerCustomer;
    }

    /**
     * @param bool $oncePerCustomer
     */
    public function setOncePerCustomer($oncePerCustomer)
    {
        $this->oncePerCustomer = $oncePerCustomer;
    }

    /**
     * @return int
     */
    public function getUsageLimit()
    {
        return $this->usageLimit;
    }

    /**
     * @param int
     */
    public function setUsageLimit($usageLimit)
    {
        $this->usageLimit = $usageLimit;
    }

    /**
     * @return string
     */
    public function getCustomerSelection()
    {
        return $this->customerSelection;
    }

    /**
     * @param string $customerSelection
     */
    public function setCustomerSelection($customerSelection)
    {
        $this->customerSelection = $customerSelection;
    }

    /**
     * @return array
     */
    public function getPrerequisiteSavedSearchIds()
    {
        return $this->prerequisiteSavedSearchIds;
    }

    /**
     * @param array
     */
    public function setPrerequisiteSavedSearchIds($prerequisiteSavedSearchIds)
    {
        $this->prerequisiteSavedSearchIds = $prerequisiteSavedSearchIds;
    }

    /**
     * @return array
     */
    public function getPrerequisiteCustomerIds()
    {
        return $this->prerequisiteCustomerIds;
    }

    /**
     * @param array $prerequisiteCustomerIds
     */
    public function setPrerequisiteCustomerIds($prerequisiteCustomerIds)
    {
        $this->prerequisiteCustomerIds = $prerequisiteCustomerIds;
    }

    /**
     * @return array
     */
    public function getPrerequisiteSubtotalRange()
    {
        return $this->prerequisiteSubtotalRange;
    }

    /**
     * @param array
     */
    public function setPrerequisiteSubtotalRange($prerequisiteSubtotalRange)
    {
        $this->prerequisiteSubtotalRange = $prerequisiteSubtotalRange;
    }

    /**
     * @return array
     */
    public function getPrerequisiteShippingPriceRange()
    {
        return $this->prerequisiteShippingPriceRange;
    }

    /**
     * @param array $prerequisiteShippingPriceRange
     */
    public function setPrerequisiteShippingPriceRange($prerequisiteShippingPriceRange)
    {
        $this->prerequisiteShippingPriceRange = $prerequisiteShippingPriceRange;
    }

    /**
     * @return array
     */
    public function getPrerequisiteQuantityRange()
    {
        return $this->prerequisiteQuantityRange;
    }

    /**
     * @param array $prerequisiteQuantityRange
     */
    public function setPrerequisiteQuantityRange($prerequisiteQuantityRange)
    {
        $this->prerequisiteQuantityRange = $prerequisiteQuantityRange;
    }

    /**
     * @return array
     */
    public function getPrerequisiteToEntitlementQuantityRatio()
    {
        return $this->prerequisiteToEntitlementQuantityRatio;
    }

    /**
     * @param array $prerequisiteToEntitlementQuantityRatio
     */
    public function setPrerequisiteToEntitlementQuantityRatio($prerequisiteToEntitlementQuantityRatio)
    {
        $this->prerequisiteToEntitlementQuantityRatio = $prerequisiteToEntitlementQuantityRatio;
    }

    /**
     * @return array
     */
    public function getPrerequisiteVariantIds()
    {
        return $this->prerequisiteVariantIds;
    }

    /**
     * @param array $prerequisiteVariantIds
     */
    public function setPrerequisiteVariantIds($prerequisiteVariantIds)
    {
        $this->prerequisiteVariantIds = $prerequisiteVariantIds;
    }

    /**
     * @return array
     */
    public function getPrerequisiteProductIds()
    {
        return $this->prerequisiteProductIds;
    }

    /**
     * @param array $prerequisiteProductIds
     */
    public function setPrerequisiteProductIds($prerequisiteProductIds)
    {
        $this->prerequisiteProductIds = $prerequisiteProductIds;
    }

    /**
     * @return array
     */
    public function getPrerequisiteCollectionIds()
    {
        return $this->prerequisiteCollectionIds;
    }

    /**
     * @param array $prerequisiteCollectionIds
     */
    public function setPrerequisiteCollectionIds($prerequisiteCollectionIds)
    {
        $this->prerequisiteCollectionIds = $prerequisiteCollectionIds;
    }

    /**
     * @return array
     */
    public function getEntitledProductIds()
    {
        return $this->entitledProductIds;
    }

    /**
     * @param array $entitledProductIds
     */
    public function setEntitledProductIds($entitledProductIds)
    {
        $this->entitledProductIds = $entitledProductIds;
    }

    /**
     * @return array
     */
    public function getEntitledVariantIds()
    {
        return $this->entitledVariantIds;
    }

    /**
     * @param array $entitledVariantIds
     */
    public function setEntitledVariantIds($entitledVariantIds)
    {
        $this->entitledVariantIds = $entitledVariantIds;
    }

    /**
     * @return array
     */
    public function getEntitledCollectionIds()
    {
        return $this->entitledCollectionIds;
    }

    /**
     * @param array $entitledCollectionIds
     */
    public function setEntitledCollectionIds($entitledCollectionIds)
    {
        $this->entitledCollectionIds = $entitledCollectionIds;
    }

    /**
     * @return array
     */
    public function getEntitledCountryIds()
    {
        return $this->entitledCountryIds;
    }

    /**
     * @param array $entitledCountryIds
     */
    public function setEntitledCountryIds($entitledCountryIds)
    {
        $this->entitledCountryIds = $entitledCountryIds;
    }

    /**
     * @return string
     */
    public function getStartsAt()
    {
        return $this->startsAt;
    }

    /**
     * @param string $startsAt
     */
    public function setStartsAt($startsAt)
    {
        $this->startsAt = $startsAt;
    }

    /**
     * @return string
     */
    public function getEndsAt()
    {
        return $this->endsAt;
    }

    /**
     * @param string $endsAt
     */
    public function setEndsAt($endsAt)
    {
        $this->endsAt = $endsAt;
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
}
