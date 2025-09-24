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

$staurie = new Staurie('Excalibur');
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
    'text'=> "Bienvenue dans le monde d'Excalibur",
    'labels'=> [
        'new_game' => 'Commencer une nouvelle quête',
        'quit'=> 'quitter',
    ]
]);

$character = $container->registerComponent(MainCharacter::class);
$character->configuration([
    'ask_name' => true,
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
    'compass_enable'=>true,
    'x_start' => 0,
    'y_start' => 0,
]);

$introduction = $container->registerComponent(Introduction::class);
$introduction->configuration([
    'text'=>[
        'Partez à la recherche du mythique Graal',
        "Combattez des monstres et équipez vous d'objets magiques",
    ],
    'title'=>'Excalibure',
    'scrolling'=>false
]);

$money = $container->registerComponent(Money::class);
$money->configuration([
    'name' => 'Coda points',
    'start_with' => 100
]);

$staurie->run();
