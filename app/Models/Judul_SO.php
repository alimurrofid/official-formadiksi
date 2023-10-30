<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judul_SO extends Model
{
    use HasFactory;

    protected $table = 'judul_so';

    protected $fillable = [
        'judul'
    ];
}
