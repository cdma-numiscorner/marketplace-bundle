<?php


namespace Numiscorner\MarketplaceBundle\Model\Common;

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

    public function __construct(string $locale)
    {
        $this->locale = $locale;
    }

    public function addkeyValueHolder(KeyValueHolder $keyValueHolder)
    {
        $this->keyValues[] = $keyValueHolder;
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
