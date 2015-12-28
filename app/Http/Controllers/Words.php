<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Words extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
                $phrases = DB::table('Dictionary')->select('ID','Source','French','German','Japanese','Brazil')->get();

        echo json_encode($phrases,JSON_NUMERIC_CHECK);



                    //return view('user.index', ['users' => $users]);
          }


 public function language($lang)
    {
     
                $phrases = DB::table('Dictionary')->select('ID','Source', $lang)->get();

               /* $to_be_done = DB::query(SELECT `Master`.Source, 
    `Master`.ID, 
    $lang.Target, 
    $lang.Last_edit_by, 
    $lang.Date_Time_Edit, 
    $lang.Previous_Edit
FROM `Master` INNER JOIN $lang ON `Master`.ID = $lang.ID
WHERE `$lang`.`Target` = '' 
)->get();*/



        echo json_encode($phrases,JSON_NUMERIC_CHECK);



                    //return view('user.index', ['users' => $users]);
          }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        DB::table('Master')->insert(['Source' => 'Insert Test']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
