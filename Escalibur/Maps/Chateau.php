<?php

namespace Merlin\Escalibur\Maps;

use Merlin\Component\Map\Blueprint;
use Merlin\Game\Position\Position;
use Merlin\Escalibur\Npcs\VielHomme;
use Merlin\Escalibur\Items\Epée;
use Merlin\Escalibur\Monsters\Bouftou;
use Merlin\Escalibur\Monsters\Dragon;
use Merlin\Escalibur\Items\Grimoire;

class Chateau extends Blueprint {

    public function npcs(): array { return [new VielHomme()]; }
    public function items(): array { return [new Epée(), new Grimoire()]; }
    public function monsters(): array { return [new Bouftou()]; }
    public function name(): string { return "royaume de bretagne"; }
    public function description(): string { return "1 chateau, 3 maisons"; }
    public function position(): Position { return new Position(1,0); }
}