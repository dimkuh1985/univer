<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'faculties';
    protected $fillable = ['fname', 'created_at', 'updated_at'];
}
