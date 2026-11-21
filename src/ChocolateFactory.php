<?php

declare(strict_types=1);

namespace ChocolateFactory;

class ChocolateFactory
{
    public function orderSnack(string $type): void
    {
        $snack = $this->createSnack($type);
        $snack->prepare();
        $snack->cut();
    }

    public function createSnack(string $type): Snack
    {
        return new Snack($type, 'молочный шоколад', []);
    }
}
