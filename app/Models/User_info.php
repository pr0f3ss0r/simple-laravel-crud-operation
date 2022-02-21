<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    use HasFactory;

    protected $table = 'user_infos';

    protected $fillable = [
        'name',
        'age',
        'course',
        'hobby'
    ];

}
