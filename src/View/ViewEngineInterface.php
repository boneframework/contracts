<?php

declare(strict_types=1);

namespace Bone\View;

interface ViewEngineInterface
{
    public function render($view, array $vars = []);
    public function addFolder($name, $directory, $fallback = false);
}
