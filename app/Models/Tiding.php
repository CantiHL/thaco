<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiding extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'date',
        'content',
        'field_id',
        'tag',
        'image',
        'belong_to',
    ];
}
