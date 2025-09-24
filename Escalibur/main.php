<?php

use Merlin\Component\Character\MainCharacter;
use Merlin\Component\Console\Console;
use Merlin\Component\Introduction\Introduction;
use Merlin\Component\Inventory\Inventory;
use Merlin\Component\Level\Level;
use Merlin\Component\Map\Map;
use Merlin\Component\Menu\Menu;
use Merlin\Component\Money\Money;
use Merlin\Component\PrettyPrinter\PrettyPrinter;
use Merlin\Component\Race\Race;
use Merlin\Staurie;

require __DIR__.'/../vendor/autoload.php';

$staurie = new Staurie('Example lands');
$staurie->register([
    Console::class, 
    PrettyPrinter::class, 
    Inventory::class, 
    Race::class,
    Level::class
]);

$container = $staurie->getContainer();

$menu = $container->registerComponent(Menu::class);
$menu->configuration([
    'text'=> 'Welcome to this awesome test adventure',
    'labels'=> [
        'new_game' => 'Enter the world',
        'quit'=> 'Exit game',
    ]
]);

$character = $container->registerComponent(MainCharacter::class);
$character->configuration([
    'ask_name' => false,
    'ask_gender' => false,
    'character_has_name' => true,
    'character_has_gender' => true,
]);

$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory'=>__DIR__.'/Maps',
    'namespace'=>'Merlin\Escalibur\Maps', 
    'navigation'=>true,
    'map_enable'=>true,
    'compass_enable'=>true
]);

$introduction = $container->registerComponent(Introduction::class);
$introduction->configuration([
    'text'=>[
        'This is an introduction to test the introduction component',
        'You can use it multiline by using an array in configuration'
    ],
    'title'=>'Chapter 1 : The new game',
    'scrolling'=>false
]);

$money = $container->registerComponent(Money::class);
$money->configuration([
    'name' => 'Coda points',
    'start_with' => 100
]);

$staurie->run();
