<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'groups';
    protected $fillable = ['gname','faculty_id', 'created_at', 'updated_at'];
}
