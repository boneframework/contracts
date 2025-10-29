<?php

declare(strict_types=1);

namespace Bone\Contracts\Container;

interface AdminPanelProviderInterface
{
    /*
     * an array of links, each link is an array containing
     * Admin Link display name
     * Link URL
     * Icon <i> class (optional)
     * <a> class (optional)
     * <li> class (optional)
     */
    public function getAdminLinks(): array;
}
