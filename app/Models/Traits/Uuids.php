<?php
namespace App\Models\Traits;

use Psy\Util\Str;

trait Uuids
{

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = \Illuminate\Support\Str::uuid()->toString();
        });
    }
}
