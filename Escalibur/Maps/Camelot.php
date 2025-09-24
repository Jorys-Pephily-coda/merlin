<?php

namespace Merlin\Escalibur\Maps;

use Merlin\Component\Map\Blueprint;
use Merlin\Game\Position\Position;
use Merlin\Escalibur\Items\Grimoire;
use Merlin\Escalibur\Npcs\VielHomme;

class Camelot extends Blueprint {

    public function npcs(): array { return [new VielHomme()]; }
    public function items(): array { return [new Grimoire()]; }
    public function monsters(): array { return []; }
    public function name(): string { return "Camelot"; }
    public function description(): string { return "Le château du roi Arthur, lieu central et sécurisé"; }
    public function position(): Position { return new Position(0,0); }
}