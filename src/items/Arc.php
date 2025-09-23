<?php

namespace App\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Arc extends Item_Equippable {
  public function name(): string {
    return "Arc";
  }

  public function description(): string {
    return "Un arc en bois basique mais solide.";
  }

  public function body_part(): string {
    return "hand";
  }

  public function statistics(): array {
    return ["attack" => 5];
  }
}