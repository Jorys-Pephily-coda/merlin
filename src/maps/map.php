<?php
namespace Mon\Namespace\Maps;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
class MapTest extends Blueprint {
public function npcs(): array { return "VielHomme";}
public function items(): array { return "Arc, Epée";}
public function monsters(): array { }
public function name(): string { return "royaume de bretagne";}
public function description(): string { return "1 chateau, 3 maisons";}
public function position(): Position { }
}