<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dana_punia extends Model
{
    use HasFactory;
    protected $fillable=[
        'id', 'Nama', 'Jumlah', 'Keterangan'
    ];
}
