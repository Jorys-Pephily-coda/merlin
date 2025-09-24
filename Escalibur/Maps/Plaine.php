<?php

namespace Merlin\Escalibur\Maps;

use Merlin\Component\Map\Blueprint;
use Merlin\Game\Position\Position;
use Merlin\Escalibur\Npcs\VielHomme;
use Merlin\Escalibur\Items\Arc;
use Merlin\Escalibur\Monsters\Bouftou;
use Merlin\Escalibur\Monsters\Dragon;
use Merlin\Escalibur\Items\Grimoire;

class Plaine extends Blueprint {

    public function npcs(): array { return []; }
    public function items(): array { return [new Arc()]; }
    public function monsters(): array { return [new Bouftou()]; }
    public function name(): string { return "Plaine verdoyante"; }
    public function description(): string { return "Étendues d'herbe, Champs de blé"; }
    public function position(): Position { return new Position(2,0); }
}