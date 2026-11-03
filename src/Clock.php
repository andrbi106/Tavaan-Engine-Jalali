<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n\Jalali;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Clock — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\I18n\Jalali\Contracts\ClockInterface
 */
final class Clock implements Contracts\ClockInterface
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
    public function utcNow(/* ... */): mixed
    {
        // TODO: پیاده‌سازی utcNow مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function now(/* ... */): mixed
    {
        // TODO: پیاده‌سازی now مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function jalaliNow(/* ... */): mixed
    {
        // TODO: پیاده‌سازی jalaliNow مطابق مستندات (سند §3 API).
        return null;
    }
}