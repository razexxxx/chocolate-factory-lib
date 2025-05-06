<?php

namespace ChocolateFactoryLib;

abstract class ChocolateFactory
{
    public function orderSnack(string $type): Snack
    {
        $snack = $this->createSnack($type);

        $snack->prepare();
        $snack->cut();

        return $snack;
    }

    abstract protected function createSnack(string $type): Snack;
}
