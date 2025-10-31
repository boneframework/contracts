<?php

declare(strict_types=1);

namespace Bone\Contracts\Container;

interface DefaultSettingsProviderInterface
{
    public function getSettingsFileContents(): string;
    public function getSettingsFileName(): string;
}
