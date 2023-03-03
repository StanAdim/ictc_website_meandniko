<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectOwner extends Model
{
    use HasFactory;

    protected $fillable =  [
        'firstName',
        'secondName',
        'phoneNumber',
        'email',
        'dob',
        'nationality',
        'region',
        'district',
        'gender'
    ];
    
}
