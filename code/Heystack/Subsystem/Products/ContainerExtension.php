<?php

namespace Heystack\Subsystem\Products;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class ContainerExtension implements ExtensionInterface
{

    public function load(array $config, ContainerBuilder $container)
    {

        $loader = new YamlFileLoader(
            $container,
            new FileLocator(ECOMMERCE_PRODUCT_BASE_PATH . '/config')
        );

        $loader->load('services.yml');

    }

    public function getNamespace()
    {
        return 'products';
    }

    public function getXsdValidationBasePath()
    {
        return false;
    }

    public function getAlias()
    {
        return 'products';
    }

}