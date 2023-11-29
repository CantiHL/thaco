<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevelopmentProcess extends Model
{
    use HasFactory;
    protected $fillable = [
        'year',
        'description',
        'image',
    ];
}
