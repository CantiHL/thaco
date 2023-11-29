<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicTrandition extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'lyrics', 'mp3', 'mp4'];
}
