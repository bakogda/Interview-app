<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
  protected $table = 'memberships';
  protected $fillable = ['membership_id','membership_date'];

    public function members()
    {
      return $this->belongsTo(Members::class);
    }
}
