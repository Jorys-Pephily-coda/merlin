<?php

namespace Merlin\Escalibur\Monsters;

use Merlin\Game\Monster;


class Minotoror extends Monster {
    public function name(): string {
        return 'Minotoror';
    }

    public function description(): string {
        return 'A powerful minotaur with unmatched strength.';
    }

    public function level(): int {
        return 10;
    }

    public function health_points(): int {
        return 70;
    }

    public function defense(): int {
        return 3;
    }

    public function attack(): int {
        return 30;
    }

    public function experience(): int {
        return 150;
    }

    public function skills(): array {
        return [
            'Mighty Slam' => 40,
            'Rage Roar' => 25,
        ];
    }
}