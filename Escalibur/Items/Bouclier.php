<?php

namespace Merlin\Escalibur\Items;

use Merlin\Game\Item_Equippable;

class Bouclier extends Item_Equippable {
  public function name(): string {
    return "Bouclier";
  }

  public function description(): string {
    return "Un Bouclier basique mais solide.";
  }

  public function body_part(): string {
    return "hand";
  }

  public function statistics(): array {
    return ["def" => 5];
  }
}