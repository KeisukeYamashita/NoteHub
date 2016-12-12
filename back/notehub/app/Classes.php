<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'classid';

    protected $fillable = [
      'classid',
      'className',
      'teacherName',
      'roomNumber',
      'dayOfWeek',
      'period',
      'classUrl',
    ];
}
