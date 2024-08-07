<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'users';
    protected $fillable =['id','fio', 'address', 'number', 'email',];
}
