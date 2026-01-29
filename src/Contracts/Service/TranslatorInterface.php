<?php

declare(strict_types=1);

namespace Bone\Contracts\Service;

interface TranslatorInterface
{
    public function translate(string $message, ?string $textDomain = null, ?string $locale = null): string;
    public function getLocale(): string;
}