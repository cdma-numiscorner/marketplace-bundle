<?php


namespace Numiscorner\MarketplaceBundle\Helper;


use Doctrine\Common\Collections\ArrayCollection;
use Numiscorner\MarketplaceBundle\Model\Common\TranslatableProxy;

class TranslatableProxyHelper
{
    /**
     * Get a TranslatableProxy by locale
     * 
     * @param ArrayCollection|TranslatableProxy[] $translations
     * @param string $locale
     *
     * @return TranslatableProxy
     */
    public static function getTranslationsByLocale(ArrayCollection $translations, string $locale): TranslatableProxy
    {
        return  $translations->filter(function (TranslatableProxy $translatableProxy) use ($locale) {
            return $translatableProxy->getLocale() === $locale;
        })->first();
    }
}
