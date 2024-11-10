<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table="employees";

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
