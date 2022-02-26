<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealTimeNotice extends Model
{
    // use HasFactory;
    protected $fillable = ['id', 'messages'];
}
