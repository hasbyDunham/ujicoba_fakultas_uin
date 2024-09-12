<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    public $fillable = ['id', 'judul_berita', 'deskripsi', 'foto'];
    public $visible = ['id', 'judul_berita', 'deskripsi', 'foto'];
    public $timestamp = true;
}
