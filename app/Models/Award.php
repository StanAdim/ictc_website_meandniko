<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Award extends Model
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

    public function categories() {
        return $this->hasMany(AwardCategory::class, 'award_id');
    }

    public function applications() {
        return $this->hasMany(AwardApplication::class, 'award_id');
    }
}
