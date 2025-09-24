<?php

namespace Merlin\Escalibur\Maps;

use Merlin\Component\Map\Blueprint;
use Merlin\Game\Position\Position;
use Merlin\Escalibur\Items\Graal;

class Tour extends Blueprint {

    public function npcs(): array { return []; }
    public function items(): array { return [new Graal()]; }
    public function monsters(): array { return []; }
    public function name(): string { return "Tour du Graal"; }
    public function description(): string { return "Une tour abritant un légendaire artéfact."; }
    public function position(): Position { return new Position(1,3); }
}