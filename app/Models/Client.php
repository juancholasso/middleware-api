<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "hook_key",
        "zkong_account",
        "zkong_password",
        "zkong_attr_category",
        "zkong_attr_name",
        "zkong_store_id",
    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::created(function (Client $client) {
            $key = Str::random(40);
            $client->hook_key = $key;
            $client->save();
        });
    }
}
