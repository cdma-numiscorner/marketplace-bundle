<?php


namespace Numiscorner\MarketplaceBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class NumiscornerMarketPlaceExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        // TODO: Implement load() method.
    }

    /** @inheritDoc */
    public function getAlias()
    {
        return 'numiscorner_marketplace';
    }
}
