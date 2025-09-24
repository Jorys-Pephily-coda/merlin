<?php

namespace Merlin\Escalibur\Maps;

use Merlin\Component\Map\Blueprint;
use Merlin\Game\Position\Position;

class Pont extends Blueprint {

    public function npcs(): array { return []; }
    public function items(): array { return []; }
    public function monsters(): array { return []; }
    public function name(): string { return "Pont du destin"; }
    public function description(): string { return "Un passage dangereux qu'il faut franchir en prouvant sa valeur."; }
    public function position(): Position { return new Position(2,2); }
}