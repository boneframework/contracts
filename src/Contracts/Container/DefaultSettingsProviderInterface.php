<?php

declare(strict_types=1);

namespace Bone\Contracts\Container;

interface ApiDocProviderInterface
{
    public function getDefaultSettings(): array;
    public function getSettingsFileName(): string;
}
