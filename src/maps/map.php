<?php
/*namespace src;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
class Maps extends Blueprint {
public function npcs(): array { return ["VielHomme"];}
public function items(): array { return ["Arc","Epée"];}
//public function monsters(): array { }
public function name(): string { return "royaume de bretagne";}
public function description(): string { return "1 chateau, 3 maisons";}
public function position(): Position  [0,0];
}*/

namespace Mon\Namespace\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class MapTest extends Blueprint {

    public function npcs(): array {
        return []; // tu mettras tes PNJ ici
    }

    public function items(): array {
        return []; // tu mettras tes objets ici
    }

    public function monsters(): array {
        return []; // tu mettras tes monstres ici
    }

    public function name(): string {
        return "La Forêt Enchantée";
    }

    public function description(): string {
        return "Une forêt mystérieuse pleine de bruits étranges...";
    }

    public function position(): Position {
        return new Position(0, 0); // coordonnées de départ de cette map
    }
}
