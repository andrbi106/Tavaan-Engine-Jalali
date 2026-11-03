<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n\Jalali\Contracts;

/**
 * قرارداد Clock.
 *
 * @see \Tavaan\Engine\I18n\Jalali\Clock
 * @api 1.0
 */
interface ClockInterface
{
    /**
     * متد utcNow.
     *
     * @return mixed
     */
    public function utcNow(/* ... */): mixed;

    /**
     * متد now.
     *
     * @return mixed
     */
    public function now(/* ... */): mixed;

    /**
     * متد jalaliNow.
     *
     * @return mixed
     */
    public function jalaliNow(/* ... */): mixed;
}