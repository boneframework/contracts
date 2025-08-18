<?php

declare(strict_types=1);

namespace Bone\Contracts\Container;

use Psr\Container\ContainerInterface as PsrContainer;

interface ContainerInterface extends PsrContainer
{
    public function factory($callable);
}
