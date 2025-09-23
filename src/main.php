<?php
use Jugid\Staurie\Staurie;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Mon\Name\Space;
require_once __DIR__ . "/../vendor/autoload.php";
$staurie = new Staurie("La quete du Graal");

$container = $staurie->getContainer();

$menu = $container->registerComponent(Menu::class);
$menu->configuration([
    'text'=> 'Welcome to this awesome adventure',
    'labels'=> [
        'new_game' => 'Enter the world',
        'quit'=> 'Exit game',
        //'new_map' => 'aller sur la maps'
    ]
]);

$staurie->register([Console::class, PrettyPrinter::class, Menu::class]);

$staurie->run(); //LANCE LE JEU
