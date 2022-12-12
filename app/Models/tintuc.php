<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tintuc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='tintucs'; 
    protected $fillable = [
        'tieude',
        'noidung',       
        'image'
    ];
}
