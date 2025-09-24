<?php

namespace Merlin\Escalibur\Maps;

use Merlin\Component\Map\Blueprint;
use Merlin\Game\Position\Position;

class Dolmen extends Blueprint {

    public function npcs(): array { return []; }
    public function items(): array { return []; }
    public function monsters(): array { return []; }
    public function name(): string { return "Dolmen de l’Éternité"; }
    public function description(): string { return "Monument mégalithique, utilisé comme autel dans les cultes druidiques. il est eternel."; }
    public function position(): Position { return new Position(1,2); }
}