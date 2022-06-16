<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;


    protected $fillable =[
        'music_name',
        'music_format',
        'music_genre',
        'music_image',
        'music_file',
        'music_duration',
        'music_size',
        'album',
        'music_track_num',
        'artist_id',
        'hashtag'];



} 
