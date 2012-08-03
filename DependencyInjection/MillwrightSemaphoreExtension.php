<?php
namespace Millwright\SemaphoreBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Millwright\ConfigurationBundle\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class MillwrightSemaphoreExtension extends Extension
{
    protected $bundleRoot = __DIR__;

    /**
     * Get configuration files array
     *
     * @return array
     */
    protected function getConfigParts()
    {
        return array(
            'services.yml',
            'adapters.yml',
        );
    }
}