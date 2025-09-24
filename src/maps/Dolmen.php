<?php

namespace Mon\Namespace\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Dolmen extends Blueprint {

    public function npcs(): array { return []; }
    public function items(): array { return []; }
    public function monsters(): array { return []; }
    public function name(): string { return "Dolmen de l’Éternité"; }
    public function description(): string { return "1 chateau, 3 maisons"; }
    public function position(): Position { return new Position(1,2); }
}