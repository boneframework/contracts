<?php

declare(strict_types=1);

namespace Bone\Contracts\Container;

interface FixtureProviderInterface
{
    public function getFixtures(): array;
}
