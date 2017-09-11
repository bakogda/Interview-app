<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Membership;
use Carbon\Carbon;

class MembershipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('mpages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, array(
        'member_id' => 'required',
        'membership_date' => 'required|date|date_format:Y/m/d'
      ));

        $membershipidentifier = $request->member_id;
        $type = $request->visible;
        $cdate = $request->membership_date;

        $books = Membership::where('membership_id',$membershipidentifier)->get();
        foreach($books as $book)
        {
           $data=$book->membership_date;
        }
        if($type === '2')
        {
          DB::table('memberships')
          ->where('membership_id', $membershipidentifier)
          ->update(array('membership_date' => DB::raw('DATE_ADD(membership_date, INTERVAL 1 MONTH)')));
        }else if($type === '1')
        {
          DB::table('memberships')
          ->where('membership_id', $membershipidentifier)
          ->update(array('membership_date' => DB::raw('DATE_ADD(membership_date, INTERVAL 7 DAY)')));
        }else if($type === '0')
        {
          DB::table('memberships')
          ->where('membership_id', $membershipidentifier)
          ->update(array('membership_date' => DB::raw('DATE_ADD(membership_date, INTERVAL 1 DAY)')));
        }else if($type === '3')
        {
          DB::table('memberships')
          ->where('membership_id', $membershipidentifier)
          ->update(array('membership_date' => DB::raw("' $cdate '")));
        }
          return view('mpages/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
