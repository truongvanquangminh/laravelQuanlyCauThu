<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;

    protected $table = 'players';

    protected $fillable = ['name', 'age', 'national', 'position', 'salary'];

    public $timestamps = false;
}
