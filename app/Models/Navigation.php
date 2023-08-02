<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    protected $table = 'navigation';
    protected $fillable = ['name', 'sub_menu'];
}
