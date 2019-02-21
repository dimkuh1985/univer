<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'students';
    protected $fillable = ['sname','age','rate','group_id', 'created_at', 'updated_at'];
}
