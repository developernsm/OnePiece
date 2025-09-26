<?php

namespace OnePiece;

use OnePiece\Models\Pirate;

class OnePieceClient {
    private $crew = [];

    public function __construct() {
        $this->crew = [
            new Pirate("Monkey D. Luffy", "Capitán", 3000000000),
            new Pirate("Roronoa Zoro", "Espadachín", 1111000000),
            new Pirate("Nami", "Navegante", 366000000),
            new Pirate("Sanji", "Cocinero", 1032000000),
            new Pirate("Nico Robin", "Arqueóloga", 930000000),
        ];
    }

    public function getCrew(): array {
        return $this->crew;
    }

    public function findPirate(string $name): ?Pirate {
        foreach ($this->crew as $pirate) {
            if (stripos($pirate->name, $name) !== false) {
                return $pirate;
            }
        }
        return null;
    }
}
