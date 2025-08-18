<?php

declare(strict_types=1);

namespace Bone\View;

interface ViewEngineInterface
{
    public function __construct($viewPath, $extension = null);
    public function render($view, array $vars = []): string;
    public function addFolder($name, $directory, $fallback = false);
}
