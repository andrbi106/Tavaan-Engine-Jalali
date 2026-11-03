<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Jalali Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور jalali — همهٔ کلیدهای مستندشده در `docs/03-engines/jalali.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/jalali.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('JALALI_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('JALALI_PREFIX', 'jalali:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('JALALI_LOG_CHANNEL', 'jalali'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];