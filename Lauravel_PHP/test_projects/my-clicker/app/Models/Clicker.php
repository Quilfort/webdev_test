<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clicker extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'startCount', 'clicks', 'endCount'];
}
