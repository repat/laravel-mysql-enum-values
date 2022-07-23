<?php

namespace Repat\LaravelMySqlEnumValues;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\ServiceProvider;
use Repat\LaravelMySqlEnumValues\Macros\EnumValues;

class QueryBuilderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Builder::macro('enumValidValues', function (string $column) {
            return with(new EnumValues($this, $column))->execute();
        });
    }
}
