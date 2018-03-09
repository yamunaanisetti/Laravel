<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
   protected $table = 'employees';
   protected $fillable = ['id',
    'name', 'gender', 'phone','address'];
     protected $id = '';
     protected $name = '';
     protected $gender = '';
     protected $phone = '';
     protected $address='';
     
}
