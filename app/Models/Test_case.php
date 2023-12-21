<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test_case extends Model
{
    use HasFactory;
    protected $table = 'test_case';
    protected $guarded = [];
}
