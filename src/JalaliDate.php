<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n\Jalali;

/**
 * JalaliDate — کار با تاریخ جلالی (فرمت، نام روز/ماه).
 */
final class JalaliDate
{
    /** @var list<string> */
    public const array MONTH_NAMES = [
        'فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور',
        'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'
    ];

    /** @var list<string> */
    public const array WEEK_DAYS = [
        'یکشنبه', 'دوشنبه', 'سه‌شنبه', 'چهارشنبه', 'پنجشنبه', 'جمعه', 'شنبه'
    ];

    /** @var list<string> */
    public const string SEASON_NAMES = ['بهار', 'تابستان', 'پاییز', 'زمستان'];

    /**
     * فرمت تاریخ جلالی با pattern.
     *
     * Y: سال ۴ رقمی، y: سال ۲ رقمی
     * m: ماه ۲ رقمی، n: ماه بدون صفر، M: نام ماه
     * d: روز ۲ رقمی، j: روز بدون صفر
     *
     * @return string
     */
    public static function format(int $jy, int $jm, int $jd, string $format = 'Y/m/d'): string
    {
        $replacements = [
            'Y' => \sprintf('%04d', $jy),
            'y' => \sprintf('%02d', $jy % 100),
            'm' => \sprintf('%02d', $jm),
            'n' => (string) $jm,
            'M' => self::monthName($jm),
            'd' => \sprintf('%02d', $jd),
            'j' => (string) $jd,
            'D' => self::weekdayShort($jy, $jm, $jd),
            'l' => self::weekday($jy, $jm, $jd),
            'F' => self::seasonName($jm),
        ];
        return \strtr($format, $replacements);
    }

    public static function monthName(int $jm): string
    {
        return self::MONTH_NAMES[$jm - 1] ?? '';
    }

    public static function seasonName(int $jm): string
    {
        $season = (int) \ceil($jm / 3);  // 1-4
        return self::SEASON_NAMES[$season - 1] ?? '';
    }

    /**
     * نام روز هفته (جلالی) — محاسبه از میلادی.
     */
    public static function weekday(int $jy, int $jm, int $jd): string
    {
        [$gy, $gm, $gd] = JalaliConverter::jalaliToGregorian($jy, $jm, $jd);
        $ts = \mktime(12, 0, 0, $gm, $gd, $gy);
        $dow = (int) \date('w', $ts);  // 0 (Sunday) - 6 (Saturday)
        return self::WEEK_DAYS[$dow];
    }

    public static function weekdayShort(int $jy, int $jm, int $jd): string
    {
        $full = self::weekday($jy, $jm, $jd);
        return \mb_substr($full, 0, 2, 'UTF-8');
    }

    /**
     * تاریخ امروز جلالی.
     *
     * @return array{0: int, 1: int, 2: int}
     */
    public static function today(): array
    {
        $ts = \time();
        $gy = (int) \date('Y', $ts);
        $gm = (int) \date('m', $ts);
        $gd = (int) \date('d', $ts);
        return JalaliConverter::gregorianToJalali($gy, $gm, $gd);
    }

    /**
     * تبدیل timestamp به جلالی.
     *
     * @return array{0: int, 1: int, 2: int}
     */
    public static function fromTimestamp(int $timestamp): array
    {
        $gy = (int) \date('Y', $timestamp);
        $gm = (int) \date('m', $timestamp);
        $gd = (int) \date('d', $timestamp);
        return JalaliConverter::gregorianToJalali($gy, $gm, $gd);
    }

    /**
     * addDays
     */
    public function addDays(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
    /**
     * dayName
     */
    public function dayName(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
    /**
     * diffInDays
     */
    public function diffInDays(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
    /**
     * endOfMonth
     */
    public function endOfMonth(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
    /**
     * fromGregorian
     */
    public function fromGregorian(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
    /**
     * isLeap
     */
    public function isLeap(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
    /**
     * now
     */
    public function now(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
    /**
     * parse
     */
    public function parse(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
    /**
     * startOfMonth
     */
    public function startOfMonth(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
    /**
     * subMonths
     */
    public function subMonths(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
    /**
     * toGregorian
     */
    public function toGregorian(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
}
