<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n\Jalali\Contracts;

/**
 * قرارداد JalaliDate.
 *
 * @see \Tavaan\Engine\I18n\Jalali\JalaliDate
 * @api 1.0
 */
interface JalaliDateInterface
{
    /**
     * متد now.
     *
     * @return mixed
     */
    public function now(/* ... */): mixed;

    /**
     * متد fromGregorian.
     *
     * @return mixed
     */
    public function fromGregorian(/* ... */): mixed;

    /**
     * متد parse.
     *
     * @return mixed
     */
    public function parse(/* ... */): mixed;

    /**
     * متد toGregorian.
     *
     * @return mixed
     */
    public function toGregorian(/* ... */): mixed;

    /**
     * متد format.
     *
     * @return mixed
     */
    public function format(/* ... */): mixed;

    /**
     * متد addDays.
     *
     * @return mixed
     */
    public function addDays(/* ... */): mixed;

    /**
     * متد subMonths.
     *
     * @return mixed
     */
    public function subMonths(/* ... */): mixed;

    /**
     * متد diffInDays.
     *
     * @return mixed
     */
    public function diffInDays(/* ... */): mixed;

    /**
     * متد isLeap.
     *
     * @return mixed
     */
    public function isLeap(/* ... */): mixed;

    /**
     * متد monthName.
     *
     * @return mixed
     */
    public function monthName(/* ... */): mixed;

    /**
     * متد dayName.
     *
     * @return mixed
     */
    public function dayName(/* ... */): mixed;

    /**
     * متد startOfMonth.
     *
     * @return mixed
     */
    public function startOfMonth(/* ... */): mixed;

    /**
     * متد endOfMonth.
     *
     * @return mixed
     */
    public function endOfMonth(/* ... */): mixed;
}