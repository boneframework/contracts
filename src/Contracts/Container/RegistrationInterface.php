<?php

declare(strict_types=1);

namespace Bone\Contracts\Container;

interface RegistrationInterface
{
    public function addToContainer(ContainerInterface $c): void;
}
