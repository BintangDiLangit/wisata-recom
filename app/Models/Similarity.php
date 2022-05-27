<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Similarity extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'idu',
        'similarity'
    ];
}