# Tavaan Engine — Jalali

> **تقویم جلالی** — موتور Jalali در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.jalali` |
| نام | `Jalali` |
| عنوان فارسی | تقویم جلالی |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\I18n\Jalali` |
| نوع | `engine` |

## کلاس‌های اصلی

- `src/Clock.php`
- `src/Jalali.php`
- `src/JalaliConverter.php`
- `src/JalaliDate.php`
- `src/JalaliServiceProvider.php`

## Service Providerها

- `Tavaan\Engine\I18n\Jalali\JalaliServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `i18n`

## پیکربندی

- فایل پیکربندی: `config/jalali.php`
- کلید: `jalali`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Jalali.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Jalali`** (این مخزن) | موتور Jalali |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
