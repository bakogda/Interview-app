<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'members';
    public $primaryKey = 'id';

    public function memberships()
    {
      return this->hasOne(Membership::class);
    }
}
