<?php

declare(strict_types=1);

namespace Bone\Contracts\Container;

use Bone\Console\Command;
use Symfony\Component\Console\Style\SymfonyStyle;

interface DefaultSettingsProviderInterface
{
    public function getRequiredPackages(): array;
    public function getSettingsFileName(): string;
    public function postInstall(Command $command, SymfonyStyle $io): void;
}
