class Prespic extends Monster {
    public function name(): string {
        return 'Prespic';
    }

    public function description(): string {
        return 'A sly hedgehog with reflective quills.';
    }

    public function level(): int {
        return 3;
    }

    public function health_points(): int {
        return 25;
    }

    public function defense(): int {
        return 4;
    }

    public function attack(): int {
        return 6;
    }

    public function experience(): int {
        return 20;
    }

    public function skills(): array {
        return [
            'Quill Shot' => 15,
            'Reflect' => 5,
        ];
    }
}