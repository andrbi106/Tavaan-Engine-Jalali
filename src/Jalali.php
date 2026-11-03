<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n\Jalali;

/**
 * Jalali — پیاده‌سازی مطابق مستندات.
 *
 * @see docs/03-engines/ (YAML machine-readable block)
 */
final class Jalali
{
    /**
     * toJalali
     */
    public function toJalali(/* ... */): mixed
    {
        // TODO: Implement per docs §3 API.
        return null;
    }
    /**
     * toGregorian
     */
    public function toGregorian(/* ... */): mixed
    {
        return self::jalaliToGregorian(\$this->year, \$this->month, \$this->day);
    }
    /**
     * isLeap
     */
    public function isLeap(/* ... */): mixed
    {
        return self::isLeapJalali(\$jy);
    }
    /**
     * monthLength
     */
    public function monthLength(/* ... */): mixed
    {
        // TODO: Implement per docs §3 API.
        return null;
    }
    /**
     * format
     */
    public function format(/* ... */): mixed
    {
        // TODO: Implement per docs §3 API.
        return null;
    }
}
