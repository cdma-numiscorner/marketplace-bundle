<?php


namespace Numiscorner\MarketplaceBundle\Model\Common;

use Doctrine\Common\Collections\ArrayCollection;

class TranslatableProxy
{
    /**
     * @var string $locale
     */
    protected $locale;

    /**
     * @var KeyValueHolder[]
     */
    protected $keyValues = [];

    public function __construct()
    {
        $this->keyValues = new ArrayCollection();
    }

    public function addkeyValue(KeyValueHolder $keyValueHolder)
    {
        $this->keyValues->add($keyValueHolder);
    }

    public function removeKeyValue(KeyValueHolder $keyValueHolder)
    {
        $this->keyValues->removeElement($keyValueHolder);
    }

    /**
     * @return KeyValueHolder[]
     */
    public function getKeyValues()
    {
        return $this->keyValues;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale(string $locale): void
    {
        $this->locale = $locale;
    }
}
