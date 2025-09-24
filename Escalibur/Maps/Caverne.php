<?php

namespace Merlin\Escalibur\Maps;

use Merlin\Component\Map\Blueprint;
use Merlin\Game\Position\Position;

class Caverne extends Blueprint {

    public function npcs(): array { return []; }
    public function items(): array { return []; }
    public function monsters(): array { return []; }
    public function name(): string { return "Caverne du Dragon Rouge"; }
    public function description(): string { return "Une antre sombre où dort (ou veille ?) un dragon légendaire."; }
    public function position(): Position { return new Position(10,10); }
}