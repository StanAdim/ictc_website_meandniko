<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InnovationProject extends Model
{
    use HasFactory;
    protected $fillable =  [
        'category',
        'institution',
        'title',
        'year',
        'type',
        'brief',
        'creatorEmail',
        'isNominated',
   
    ];
   
}
