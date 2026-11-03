<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n\Jalali;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * JalaliDate — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\I18n\Jalali\Contracts\JalaliDateInterface
 */
final class JalaliDate implements Contracts\JalaliDateInterface
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
    public function now(/* ... */): mixed
    {
        // TODO: پیاده‌سازی now مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function fromGregorian(/* ... */): mixed
    {
        // TODO: پیاده‌سازی fromGregorian مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function parse(/* ... */): mixed
    {
        // TODO: پیاده‌سازی parse مطابق مستندات (سند §3 API).
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
    public function format(/* ... */): mixed
    {
        // TODO: پیاده‌سازی format مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function addDays(/* ... */): mixed
    {
        // TODO: پیاده‌سازی addDays مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function subMonths(/* ... */): mixed
    {
        // TODO: پیاده‌سازی subMonths مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function diffInDays(/* ... */): mixed
    {
        // TODO: پیاده‌سازی diffInDays مطابق مستندات (سند §3 API).
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
    public function monthName(/* ... */): mixed
    {
        // TODO: پیاده‌سازی monthName مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function dayName(/* ... */): mixed
    {
        // TODO: پیاده‌سازی dayName مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function startOfMonth(/* ... */): mixed
    {
        // TODO: پیاده‌سازی startOfMonth مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function endOfMonth(/* ... */): mixed
    {
        // TODO: پیاده‌سازی endOfMonth مطابق مستندات (سند §3 API).
        return null;
    }
}