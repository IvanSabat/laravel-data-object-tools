<?php

declare(strict_types=1);

namespace IvanSabat\DataObjects\Facades;

use Illuminate\Support\Facades\Facade;
use IvanSabat\DataObjects\Contracts\DataObjectContract;
use IvanSabat\DataObjects\Hydrator\Hydrate;

/**
 * @method static DataObjectContract fill(string $class, array $properties)
 *
 * @see \IvanSabat\DataObjects\Hydrator\Hydrate;
 */
final class Hydrator extends Facade
{
    /**
     * @return class-string
     */
    protected static function getFacadeAccessor(): string
    {
        return Hydrate::class;
    }
}
