<?php

declare(strict_types=1);

namespace App\Bundle1\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;


final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('bundle1');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
