<?php

declare(strict_types=1);

namespace App\Bundle2\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;


final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('bundle2');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
