<?php

namespace Merlin\Escalibur\Maps;

use Merlin\Component\Map\Blueprint;
use Merlin\Game\Position\Position;
use Merlin\Escalibur\Npcs\Viviane;

class Lac extends Blueprint {

    public function npcs(): array { return [new Viviane()]; }
    public function items(): array { return []; }
    public function monsters(): array { return []; }
    public function name(): string { return "Lac de Viviane"; }
    public function description(): string { return "Là où vit la Dame du Lac, gardienne du Graal et des secrets anciens."; }
    public function position(): Position { return new Position(0,2); }
}