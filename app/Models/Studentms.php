<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentms extends Model
{
    protected $fillable=[
        'fastname','lastname','img','fathername','number'
    ];
}
