<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n\Jalali;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\I18n\Jalali\Contracts\JalaliDateInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * JalaliDateServiceProvider — ثبت سرویس‌های موتور JalaliDate.
 */
final class JalaliDateServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(JalaliDateInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new JalaliDate($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            JalaliDateInterface::class,
        ];
    }
}