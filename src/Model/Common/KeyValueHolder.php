<?php


namespace Numiscorner\MarketplaceBundle\Model\Common;

class KeyValueHolder
{
    /**
     * @var string $key
     */
    protected $key;

    /**
     * @var string|null $value
     */
    protected $value;

    /**
     * @var array $extraData
     */
    protected $extraData = [];

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return $this
     */
    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string|null $value
     *
     * @return $this
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return array
     */
    public function getExtraData(): array
    {
        return $this->extraData;
    }

    /**
     * @param array $extraData
     *
     * @return $this
     */
    public function setExtraData(array $extraData): self
    {
        $this->extraData = $extraData;

        return $this;
    }
}
