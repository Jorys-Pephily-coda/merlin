<?php

namespace Mon\Namespace\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Mon\Namespace\Monsters\Dragon;

class Caverne extends Blueprint {

    public function npcs(): array { return []; }
    public function items(): array { return []; }
    public function monsters(): array { return [new Dragon()]; }
    public function name(): string { return "Caverne du Dragon Rouge"; }
    public function description(): string { return "Une antre sombre où dort (ou veille ?) un dragon légendaire."; }
    public function position(): Position { return new Position(10,10); }
}