<?php

namespace MarketplacePluginTest\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class MarketplacePluginTestRouteServiceProvider
 * @package MarketplacePluginTest\Providers
 */
class MarketplacePluginTestRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('hello-world','MarketplacePluginTest\Controllers\MarketplacePluginTestController@getHelloWorldPage');
    }
}