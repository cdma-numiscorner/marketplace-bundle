<?php


namespace Numiscorner\MarketplaceBundle\Model\Product;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Numiscorner\MarketplaceBundle\Model\Common\KeyValueHolder;
use Numiscorner\MarketplaceBundle\Model\Common\TranslatableProxy;

class Product
{
    /**
     * @var string $reference
     */
    protected $reference;

    /**
     * @var float $price
     */
    protected $price;

    /**
     * @var int $quantity
     */
    protected $quantity;

    /**
     * @var string $taxCode
     */
    protected $taxCode;

    /**
     * @var ArrayCollection|TranslatableProxy[]
     */
    protected $features;

    /**
     * @var ArrayCollection|TranslatableProxy[]
     */
    protected $translations;

    /**
     * @var ArrayCollection|TranslatableProxy[]
     */
    protected $categories;

    /**
     * @var float|null $weight
     */
    protected $weight;

    /**
     * @var array
     */
    protected $images;

    /**
     * @var bool $featured
     */
    protected $featured;

    /**
     * @var \DateTime $createdAt
     */
    protected $createdAt;

    /**
     * @var \DateTime|null $updatedAt
     */
    protected $updatedAt;

    /**
     * Hold association on marketPlace by category
     * 
     * @var ArrayCollection|KeyValueHolder
     */
    protected $mappings;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->translations = new ArrayCollection();
        $this->features = new ArrayCollection();
        $this->mappings = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return TranslatableProxy[]
     */
    public function getFeatures(): Collection
    {
        return $this->features;
    }

    public function addFeature(TranslatableProxy $translationProxy)
    {
        $this->features->add($translationProxy);
    }

    public function removeFeature(TranslatableProxy $translatableProxy)
    {
        $this->features->removeElement($translatableProxy);
    }

    /**
     * @return TranslatableProxy[]
     */
    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function addTranslation(TranslatableProxy $translationProxy)
    {
        $this->translations->add($translationProxy);
    }

    public function removeTranslation(TranslatableProxy $translatableProxy)
    {
        $this->translations->removeElement($translatableProxy);
    }

    /**
     * @return TranslatableProxy[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(TranslatableProxy $translationProxy)
    {
        $this->categories->add($translationProxy);
    }

    public function removeCategory(TranslatableProxy $translatableProxy)
    {
        $this->categories->removeElement($translatableProxy);
    }

    /**
     * @return string
     */
    public function getTaxCode(): string
    {
        return $this->taxCode;
    }

    /**
     * @param string $taxCode
     */
    public function setTaxCode(string $taxCode): void
    {
        $this->taxCode = $taxCode;
    }

    /**
     * @return array
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @param array $images
     */
    public function setImages(array $images): void
    {
        $this->images = $images;
    }

    /**
     * @return bool
     */
    public function isFeatured(): bool
    {
        return $this->featured;
    }

    /**
     * @param bool $featured
     */
    public function setFeatured(bool $featured): void
    {
        $this->featured = $featured;
    }

    /**
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @param float|null $weight
     */
    public function setWeight(?float $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime|null $updatedAt
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return ArrayCollection|KeyValueHolder
     */
    public function getMappings()
    {
        return $this->mappings;
    }

    /**
     * @param ArrayCollection|KeyValueHolder $mappings
     */
    public function setMappings($mappings): void
    {
        $this->mappings = $mappings;
    }

    public function addMapping(KeyValueHolder $mapping)
    {
        $this->mappings->add($mapping);
    }

    public function removeMapping(KeyValueHolder $mapping)
    {
        $this->mappings->removeElement($mapping);
    }
}
