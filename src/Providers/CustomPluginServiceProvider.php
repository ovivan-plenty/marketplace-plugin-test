<?php

namespace MarketplacePluginTest\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class MarketplacePluginTestServiceProvider
 * @package MarketplacePluginTest\Providers
 */
class MarketplacePluginTestServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(MarketplacePluginTestRouteServiceProvider::class);
    }
}