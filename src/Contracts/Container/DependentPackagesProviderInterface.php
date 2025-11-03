<?php

declare(strict_types=1);

namespace Bone\Contracts\Container;

interface DependentPackagesProviderInterface
{
    public function getRequiredPackages(): array;
}
