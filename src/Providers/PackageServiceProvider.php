<?php

declare(strict_types=1);

namespace IvanSabat\DataObjects\Providers;

use Illuminate\Support\ServiceProvider;
use IvanSabat\DataObjects\Console\Commands\DataTransferObjectMakeCommand;
use IvanSabat\DataObjects\Contracts\HydratorContract;
use IvanSabat\DataObjects\Hydrator\Hydrate;

final class PackageServiceProvider extends ServiceProvider
{
    /**
     * @var array<class-string,class-string>
     */
    public array $bindings = [
        HydratorContract::class => Hydrate::class,
    ];

    /**
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                commands: [
                    DataTransferObjectMakeCommand::class,
                ],
            );
        }
    }
}
