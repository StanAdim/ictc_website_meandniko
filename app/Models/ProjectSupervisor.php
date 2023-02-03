<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSupervisor extends Model
{
    use HasFactory;
    protected $fillable =  [
        'firstName',
        'secondName',
        'phoneNumber',
        'email',
        'nationality',
        'fieldExperties',
        'creatorEmail'
    ];
}
