<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    public $fillable = ['id', 'judul_pengumuman', 'deskripsi_pengumuman', 'foto'];
    public $visible = ['id', 'judul_pengumuman', 'deskripsi_pengumuman', 'foto'];
    public $timestamp = true;
}
