<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Searchable\SearchResult;
use Spatie\Searchable\Searchable;

class Baidang extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='baidangs'; 
    protected $fillable = [
        'loai',
        'noidung',
        'noimat',
        'ngaymat',
        'username',
        'image',
        'phone',
        'iduser'
    ];
}

