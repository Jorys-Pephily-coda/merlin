<?php
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Staurie;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
// use Mon\Name\Space;
require_once __DIR__ . "/../vendor/autoload.php";
$staurie = new Staurie("La quete du Graal");

$container = $staurie->getContainer();

$menu = $container->registerComponent(Menu::class);
$menu->configuration([
    'text'=> 'Welcome to this awesome adventure',
    'labels'=> [
        'new_game' => 'Enter the world',
        'quit'=> 'Exit game',
    ]
]);

// configuration de la map
$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory' => __DIR__ . '/maps', // chemin vers ton dossier maps
    'namespace' => 'Mon\Namespace\Maps', // namespace utilisé dans tes fichiers
    'navigation' => true,
    'map_enable' => true,
    'compass_enable' => true,
    'x_start' => 1,
    'y_start' => 1,
]); 

$staurie->register([Console::class, PrettyPrinter::class, Menu::class]);

$staurie->run(); //LANCE LE JEU
