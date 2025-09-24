class Scarafeuille extends Monster {
    public function name(): string {
        return 'Scarafeuille';
    }

    public function description(): string {
        return 'A giant beetle with hard armor and buzzing wings.';
    }

    public function level(): int {
        return 5;
    }

    public function health_points(): int {
        return 40;
    }

    public function defense(): int {
        return 6;
    }

    public function attack(): int {
        return 10;
    }

    public function experience(): int {
        return 40;
    }

    public function skills(): array {
        return [
            'Wing Buffet' => 20,
            'Horn Charge' => 25,
        ];
    }
}