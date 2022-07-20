<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $table ='playlist';

    protected $fillable = [
        'judul_playlist', 'slug', 'deskripsi', 'gambar_playlist', 'is_active'
    ];
    protected$hidden = [];
    public function users()

    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
