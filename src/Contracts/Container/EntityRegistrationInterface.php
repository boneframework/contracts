<?php

declare(strict_types=1);

namespace Bone\Contracts\Container;

interface EntityRegistrationInterface
{
    public function getEntityPath(): string;
}
