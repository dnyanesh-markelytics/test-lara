<?php

namespace App\Models;

use App\Models\BaseModel;

class Employee extends BaseModel
{
    protected $fillable = ['first_name','last_name','company_id','email','phone'];
   
}
