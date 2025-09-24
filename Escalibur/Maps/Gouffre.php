<?php

namespace Merlin\Escalibur\Maps;

use Merlin\Component\Map\Blueprint;
use Merlin\Game\Position\Position;
use Merlin\Escalibur\Npcs\Viviane;

class Gouffre extends Blueprint {

    public function npcs(): array { return []; }
    public function items(): array { return []; }
    public function monsters(): array { return []; }
    public function name(): string { return "Gouffre Mortel"; }
    public function description(): string { return "Si la fin de toute vie était un endroit."; }
    public function position(): Position { return new Position(0,3); }
}