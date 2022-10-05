<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembur extends Model
{
    use HasFactory;

    public $fillable = [
        'nip',
        'name',
        'ttl',
        'jk',
        'jabatan',
    ];

    public $timestamps = true;
}
