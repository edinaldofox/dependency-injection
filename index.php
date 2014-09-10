<?php

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Debug\Debug;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Vox\Treinamento\Exercicio1\Exercicio1Extension;

require 'vendor/autoload.php';

Debug::enable();

$container = new ContainerBuilder();
$extension = new Exercicio1Extension();
$container->registerExtension($extension);
$container->loadFromExtension($extension->getAlias());
//$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/Resources/config'));
//$loader->load('services.yml');

$container->compile();
//$tm = $container->get('teste_manager');

$Pedido = $container->get('pedido');
$Cafe = $container->get('cafe');
$Creme = $container->get('creme');

$Cafe->addProduto($Creme);
$Imprime = $container->get('imprime_terminal');



$Pedido->addProduto($Cafe);

$Pedido->attach($Imprime);

$Pedido->fecharPedido();
