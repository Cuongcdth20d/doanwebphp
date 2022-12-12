<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Binhluan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='binhluans'; 
    protected $fillable = [
        'binhluan',
        'idtk',
        'idbv',
        'username',
    ]; 
}
