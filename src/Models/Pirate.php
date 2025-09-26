<?php

namespace OnePiece\Models;

class Pirate {
    public $name;
    public $role;
    public $bounty;

    public function __construct(string $name, string $role, int $bounty) {
        $this->name = $name;
        $this->role = $role;
        $this->bounty = $bounty;
    }

    public function introduce(): string {
        return "{$this->name} ({$this->role}) - Recompensa: {$this->bounty} berries";
    }
}
