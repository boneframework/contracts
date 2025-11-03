<?php

declare(strict_types=1);

namespace Bone\Contracts\Container;

use Bone\Console\Command;
use Symfony\Component\Console\Style\SymfonyStyle;

interface PostInstallProviderInterface
{
    public function postInstall(Command $command, SymfonyStyle $io): void;
}
