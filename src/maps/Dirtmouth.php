<?php

namespace Mon\Namespace\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Dirtmouth extends Blueprint {

    public function npcs(): array { return []; }
    public function items(): array { return []; }
    public function monsters(): array { return []; }
    public function name(): string { return "Dirtmouth"; }
    public function description(): string { return "Un village mystérieux."; }
    public function position(): Position { return new Position(1,0); }
}