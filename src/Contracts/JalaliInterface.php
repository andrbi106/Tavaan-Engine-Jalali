<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n\Jalali\Contracts;

/**
 * قرارداد Jalali.
 *
 * @see \Tavaan\Engine\I18n\Jalali\Jalali
 * @api 1.0
 */
interface JalaliInterface
{
    /**
     * متد toJalali.
     *
     * @return mixed
     */
    public function toJalali(/* ... */): mixed;

    /**
     * متد toGregorian.
     *
     * @return mixed
     */
    public function toGregorian(/* ... */): mixed;

    /**
     * متد isLeap.
     *
     * @return mixed
     */
    public function isLeap(/* ... */): mixed;

    /**
     * متد monthLength.
     *
     * @return mixed
     */
    public function monthLength(/* ... */): mixed;

    /**
     * متد format.
     *
     * @return mixed
     */
    public function format(/* ... */): mixed;
}