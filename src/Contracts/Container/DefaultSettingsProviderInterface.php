<?php

declare(strict_types=1);

namespace Bone\Contracts\Container;

interface DefaultSettingsProviderInterface
{
    public function getRequiredPackages(): array;
    public function getSettingsFileName(): string;
}
