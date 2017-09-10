<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class MembershipsController extends Controller
{

  public function index()
  {
    return view('pages.memberships');
  }

    public function getdatatables()
    {
      return datatables(DB::table('memberships')
            ->join('members', 'membership_id', '=', 'members.member_id')
            ->select('memberships.membership_date', 'members.first_name', 'members.last_name', 'members.member_id')
            ->where('membership_date', '>', Carbon::today()))
            ->toJson();
    }

    public function getpastdata()
    {
      return datatables(DB::table('memberships')
            ->join('members', 'membership_id', '=', 'members.member_id')
            ->select('memberships.membership_date', 'members.first_name', 'members.last_name', 'members.member_id')
            ->where('membership_date', '<', Carbon::today()))
            ->toJson();
    }
}
