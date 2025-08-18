<?php

declare(strict_types=1);

namespace Bone\Contracts\Collection;

use Psr\Http\Message\UriInterface;

interface ApiCollectionInterface
{
    public function getUri(): UriInterface;
    public function getPage(): int;
    public function getTotalPages(): int;
    public function getTotalRecords(): int;
}
