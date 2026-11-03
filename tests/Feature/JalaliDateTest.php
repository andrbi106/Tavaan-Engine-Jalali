<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n\Jalali\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\I18n\Jalali\JalaliDate;
use Tavaan\Engine\I18n\Jalali\JalaliDateServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور JalaliDate.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class JalaliDateTest extends TestCase
{
    private JalaliDate $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new JalaliDate($config);
    }

    /**
     * T-01: ۱۰۰۰۰ تاریخ تصادفی: j2g(g2j(d)) == d
     */
    public function test_t01____j2gg2jd__d(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: مرزهای کبیسه: ۱۳۹۹ (کبیسه)، ۱۴۰۰، ۱۴۰۳ (کبیسه)
     */
    public function test_t02______(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: اسفند کبیسه = ۳۰ روز
     */
    public function test_t03_____(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: تطبیق با `intl` (در صورت وجود) روی ۱۰۰۰۰ نمونه
     */
    public function test_t04___intl____(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: تطبیق با `jdf`/`jalaali-js` روی نمونه‌های مرجع
     */
    public function test_t05___jdfjalaalijs__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: نام ماه/روز
     */
    public function test_t06__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: فرمت با ارقام فارسی
     */
    public function test_t07____(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-08: qمری ↔ میلادی
     */
    public function test_t08_q__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-08 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-08 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-09: `diffInDays` دوطرفه
     */
    public function test_t09_diff_in_days_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-09 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-09 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-10: startOfMonth/endOfMonth
     */
    public function test_t10_start_of_monthend_of_month(): void
    {
        // TODO: پیاده‌سازی سناریوی T-10 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-10 هنوز پیاده‌سازی نشده است.');
    }

}