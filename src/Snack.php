<?php

declare(strict_types=1);

namespace ChocolateFactory;

class Snack
{
    protected string $name;
    protected string $chocolate;
    protected array $toppings;

    public function __construct(string $name, string $chocolate, array $toppings)
    {
        $this->name = $name;
        $this->chocolate = $chocolate;
        $this->toppings = $toppings;
    }

    public function prepare(): void
    {
        echo "Началось создание снэка: {$this->name}\n";
        echo "Добавляется шоколад: {$this->chocolate}\n";
        echo 'Добавлены начинки: ' . implode(', ', $this->toppings) . "\n";
    }

    public function cut(): void
    {
        echo "Снэк нужно резать кусочками\n";
    }
}
