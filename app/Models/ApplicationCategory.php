<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class ApplicationCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];


    public function application() {
        return $this->belongsTo(AwardApplication::class);
    }

    public function award_category() {
        return $this->belongsTo(AwardCategory::class);
    }


}
