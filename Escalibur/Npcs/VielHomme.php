<?php

namespace Merlin\Escalibur\Npcs;

use Merlin\Game\Npc;
use Merlin\Escalibur\Items\Epée;

class VielHomme extends Npc {
  public function name(): string {
    return "VielHomme";
  }

  public function description(): string {
    return "Un viel homme assis près de la fontaine, l'air sage.";
  }

  public function speak(): string|array {
    if ($this->playerHasItem("Épée")) {
      return "Merci de m'avoir montré l'épée, héros !";
    }
    $this->giveItem(new Epée());
    return "Tiens, prends cette épée pour ton aventure.";
  }
}