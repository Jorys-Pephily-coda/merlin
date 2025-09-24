<?php

namespace Mon\Namespace\Maps;

use Mon\Namespace\Items\Grimoire;
use Jugid\Staurie\Game\Position\Position;
use Jugid\Staurie\Component\Map\Blueprint;

class Camelot extends Blueprint {

    public function npcs(): array { return []; }
    public function items(): array { return [new Grimoire()]; }
    public function monsters(): array { return []; }
    public function name(): string { return "Camelot"; }
    public function description(): string { return "Le château du roi Arthur, lieu central et sécurisé"; }
    public function position(): Position { return new Position(1,1); }
}