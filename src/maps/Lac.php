<?php

namespace Mon\Namespace\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Lac extends Blueprint {

    public function npcs(): array { return []; }
    public function items(): array { return []; }
    public function monsters(): array { return []; }
    public function name(): string { return "Lac de Viviane"; }
    public function description(): string { return "Là où vit la Dame du Lac, gardienne du Graal et des secrets anciens."; }
    public function position(): Position { return new Position(0,1); }
}