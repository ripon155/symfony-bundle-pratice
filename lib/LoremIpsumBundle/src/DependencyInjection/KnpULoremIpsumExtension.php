<?php 
namespace KnpU\LoremIpsumBundle\DependencyInjection;

// use Msr\ProfileBundle\MsrProfileBundle;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;



class KnpULoremIpsumExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $containerBuilder)
    {
        // var_dump($configs);die;
        $loader = new XmlFileLoader($containerBuilder,new FileLocator(__DIR__.'/../Resources/config/'));
        $loader->load('services.xml');

        $configurations = $this->getConfiguration($configs,$containerBuilder);
        $config = $this->processConfiguration($configurations,$configs );
        
        $definition = $containerBuilder->getDefinition('knpu_lorem_ipsum.knpu_ipsome');
        if(null !== $config['word_provider']){
            $definition->setArgument(0, $config['word_provider']);
        }
        $definition->setArgument(1, $config['unicron_are']);
        $definition->setArgument(2, $config['min_sunshine']);
        // var_dump($configs);die;
    }

        // public function getAlias()
    // {
    //     return 'knpu_lorem_ipsum';
    // }
}
