<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n\Jalali;

/**
 * Clock — پیاده‌سازی مطابق مستندات.
 *
 * @see docs/03-engines/ (YAML machine-readable block)
 */
final class Clock
{
    /**
     * utcNow
     */
    public function utcNow()
    {
        return null;
    }
    /**
     * now
     */
    public function now(): \DateTimeImmutable
    {
        return new \DateTimeImmutable();
    }
    /**
     * jalaliNow
     */
    public function jalaliNow()
    {
        return null;
    }
}
