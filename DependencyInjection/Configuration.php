<?php
namespace Millwright\SemaphoreBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder->root('millwright_semaphore')
            ->children()
                ->scalarNode('adapter')->defaultValue('millwright_semaphore.adapter.apc')->end()
                ->scalarNode('sleep_time')->defaultValue(1)->end()
                ->scalarNode('try_count')->defaultValue(5)->end()
                ->scalarNode('namespace')->defaultValue('millwright_semaphore')->end()
            ->end();

        return $treeBuilder;
    }
}
