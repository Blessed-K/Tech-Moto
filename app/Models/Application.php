<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table="application";

    protected $fillable=[
        'firstname',
        'other_name',
        'gender',
        'email',
        'phone',
        'dob',
        'speciality'
    ];
}
