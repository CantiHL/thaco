<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivationField extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'field_id',
        'image',
        'active_in',
        'link',
    ];
}
