<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MembersController extends Controller
{
  public function index()
  {
    return view('pages.members');
  }

  public function get_datatable()
  {
    return datatables(DB::table('members'))->toJson();
  }
}
