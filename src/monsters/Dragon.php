<?php

namespace Mon\Namespace\Monsters;

use Jugid\Staurie\Game\Monster;

class Dragon extends Monster {

    public function name() : string {
        return "Dragon Rouge aux yeux d'émeraude";
    }

    public function description(): string {
        return "Un dragon redoutable avec des écailles écarlates et des yeux brillants comme des émeraudes.";
    }

    public function level() : int {
        return 10;
    }

    public function health_points(): int {
        return 200;
    }

    public function defense(): int {
        return 15;
    }

    public function experience(): int {
        return 100;
    }

    public function skills(): array {
        return [
            ["name" => "Hurlement du dragon de feu", "damage" => 30],
            ["name" => "Griffes acérées", "damage" => 20],
        ];
    }
}
