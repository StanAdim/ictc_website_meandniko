<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class AwardApplication extends Model
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

    public function award() {
        return $this->belongsTo(Award::class);
    }

    public function categories() {
        return $this->hasMany(ApplicationCategory::class, 'award_application_id');
    }

    public function getCategoryAppliedAttribute() {
            $categories = $this->categories;
            $name = '';
            foreach ($categories as $key => $category) {
                if ($key == count($categories)-1) {
                    $name .= $category->award_category->title;
                } else {
                    $name .= $category->award_category->title;
                    $name .= ', ';
                }
            }
        return $name;
    }

}
