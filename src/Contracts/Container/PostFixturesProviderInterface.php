<?php

declare(strict_types=1);

namespace Bone\Contracts\Container;

use Bone\Console\Command;
use Symfony\Component\Console\Style\SymfonyStyle;

interface PostFixturesProviderInterface
{
    public function postFixtures(Command $command, SymfonyStyle $io): void;
}
