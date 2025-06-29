<?php

namespace Bone\Contracts\Service;

use Bone\Contracts\Collection\ApiCollectionInterface;
use Psr\Http\Message\ServerRequestInterface;

interface RestServiceInterface
{
    public function index(ServerRequestInterface $request): ApiCollectionInterface;
    public function post(array $data): mixed;
    public function get(ServerRequestInterface $request): mixed;
    public function patch(ServerRequestInterface $request): mixed;
    public function delete(ServerRequestInterface $request): void;
}
