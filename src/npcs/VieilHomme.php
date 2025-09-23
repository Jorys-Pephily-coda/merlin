<?php

namespace App\Npcs;

use Jugid\Staurie\Game\Npc;
use App\Items\Epée;

class VieilHomme extends Npc {
  public function name(): string {
    return "Vieil Homme";
  }

  public function description(): string {
    return "Un vieil homme assis près de la fontaine, l'air sage.";
  }

  public function speak(): string|array {
    if ($this->playerHasItem("Épée")) {
      return "Merci de m'avoir montré l'épée, héros !";
    }
    $this->giveItem(new Epée());
    return "Tiens, prends cette épée pour ton aventure.";
  }
}
