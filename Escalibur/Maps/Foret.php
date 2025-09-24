<?php

namespace Merlin\Escalibur\Maps;

use Merlin\Component\Map\Blueprint;
use Merlin\Escalibur\Monsters\Piou;
use Merlin\Game\Position\Position;

class Foret extends Blueprint {

    public function npcs(): array { return []; }
    public function items(): array { return []; }
    public function monsters(): array { return [new Piou()]; }
    public function name(): string { return "Forêt de Brocéliande"; }
    public function description(): string { return "Une forêt magique, mystérieuse, peuplée de fées et de druides."; }
    public function position(): Position { return new Position(1,1); }
}