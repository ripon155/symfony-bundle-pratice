<?php

namespace KnpU\LoremIpsumBundle\DependencyInjection;

// use Symfony\Component\DependencyInjection\ConfigurationInterface; 
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;


class Configuration implements ConfigurationInterface
{
	public function getConfigTreeBuilder()
	{
		$treeBuilder =	new TreeBuilder('knp_u_lorem_ipsum'); 
		// dd($treeBuilder->buildTree());$treeBuilder->getRootNode()
		// $rootNode = $treeBuilder->root('knp_u_lorem_ipsum');
		$rootNode = $treeBuilder->getRootNode();


		$rootNode
			->children()
				->booleanNode('unicron_are')->defaultTrue()->end()
				->integerNode('min_sunshine')->defaultValue(3)->end()
				->scalarNode('word_provider')->defaultNull()->end()
			->end()
			;

		return $treeBuilder;
	}
}