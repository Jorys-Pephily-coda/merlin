<?php

namespace Merlin\Escalibur\Maps;

use Merlin\Component\Map\Blueprint;
use Merlin\Game\Position\Position;

class Abbaye extends Blueprint {

    public function npcs(): array { return []; }
    public function items(): array { return []; }
    public function monsters(): array { return []; }
    public function name(): string { return "Abbaye de Montsalvat"; }
    public function description(): string { return "Un lieu de paix et de méditation, abritant des moines et des secrets anciens."; }
    public function position(): Position { return new Position(2,1); }
}