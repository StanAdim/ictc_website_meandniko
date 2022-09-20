<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        // Create uid when creating list.
        static::creating(function ($model) {
            // Create new uid
            $model->uid = (string) Uuid::generate(4);
        });
    }
}
