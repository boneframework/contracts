<?php

declare(strict_types=1);

namespace Bone\Contracts\Container;

interface ApiDocProviderInterface
{
    public function provideModels(): array;
    public function providePayloads(): array;
    public function provideResponses(): array;
    public function provideRoutes(): array;
}
