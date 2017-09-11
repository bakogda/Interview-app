<?php

namespace App\Http\Controllers;
use App\Members;
use App\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddMemberController extends Controller
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
        return view("pages.create");
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
        'member_id' => 'required|unique:members,member_id',
        'first_name' => 'required',
        'last_name' => 'required',
        'dob' => 'required|date|date_format:Y/m/d',
        'email' => 'required',
        'membership_date' => 'required'
      ));
      $member = new Members;
      $member->member_id = $request->member_id;
      $member->first_name = $request->first_name;
      $member->last_name = $request->last_name;
      $member->dob = $request->dob;
      $member->email = $request->email;
      $member->save();

      $membership = new Membership;
      $membership->membership_id = $request->member_id;
      $membership->membership_date = $request->membership_date;
      $membership->save();
            return redirect('members');
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
}
