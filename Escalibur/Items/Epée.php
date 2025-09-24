<?php

namespace Merlin\Escalibur\Items;

use Merlin\Game\Item_Equippable;

class Epée extends Item_Equippable {
  public function name(): string {
    return "Épée";
  }

  public function description(): string {
    return "Une épée basique mais solide.";
  }

  public function body_part(): string {
    return "hand";
  }

  public function statistics(): array {
    return ["ability" => 5];
  }
}