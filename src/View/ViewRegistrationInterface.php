<?php

declare(strict_types=1);

namespace Bone\View;

use Barnacle\Container;

interface ViewRegistrationInterface
{
    /**
     * Return an array of the view folders you use
     * e.g. return ['name' => __DIR__ . '/View/name'];
     */
    public function addViews(): array;


    /**
     * Return an array of view extensions
     */
    public function addViewExtensions(Container $c): array;
}
