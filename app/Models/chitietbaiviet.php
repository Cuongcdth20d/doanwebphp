<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietbaiviet extends Model
{
    use HasFactory;
    protected $fillable = [
        'loai',
        'comment'
    ];
}
