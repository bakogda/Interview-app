<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddMember extends Model
{
    protected $fillable = ['member_id','first_name','last_name','dob','email'];
}
