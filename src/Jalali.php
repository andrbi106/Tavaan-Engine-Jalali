<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n\Jalali;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Jalali — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\I18n\Jalali\Contracts\JalaliInterface
 */
final class Jalali implements Contracts\JalaliInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function toJalali(/* ... */): mixed
    {
        // TODO: پیاده‌سازی toJalali مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function toGregorian(/* ... */): mixed
    {
        // TODO: پیاده‌سازی toGregorian مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function isLeap(/* ... */): mixed
    {
        // TODO: پیاده‌سازی isLeap مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function monthLength(/* ... */): mixed
    {
        // TODO: پیاده‌سازی monthLength مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function format(/* ... */): mixed
    {
        // TODO: پیاده‌سازی format مطابق مستندات (سند §3 API).
        return null;
    }
}