<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class General extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'general_configurations';
    protected $guarded = [];

}
