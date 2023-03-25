<?php

declare(strict_types=1);

namespace Treblle\Tools\Providers;

use Illuminate\Support\ServiceProvider;

final class PackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../../config/tools.php' => config_path('tools.php'),
        ]);
    }
}
