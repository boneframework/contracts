<?php

declare(strict_types=1);

namespace Bone\Contracts\Container;

interface DefaultSettingsProviderInterface
{
    public function getDefaultSettings(): array;
    public function getSettingsFileName(): string;
}
