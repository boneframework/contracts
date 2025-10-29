<?php

declare(strict_types=1);

namespace Bone\Contracts\Container;

interface AdminPanelProviderInterface
{
    /*
     * an array of Bone\View\Util\AdminLinks
     */
    public function getAdminLinks(): array;
}
