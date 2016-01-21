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
     
        $dictionary = DB::table('Dictionary')->get();
        
        echo json_encode($dictionary,JSON_NUMERIC_CHECK);

          }



/*public function apiservice($lang, $product, $platform, $format)
    {

//query for file
     
        $apidownload = DB::table->where('lang' 'product' 'platform' 'format', $lang $product $platform $fornat) ->get();
        
        echo json_encode($apidownload,JSON_NUMERIC_CHECK);

          }*/


 public function language($lang)
    {
$translations_query = DB::table('Dictionary')
    ->where('ID')
    ->where('source')
    ->get();
        echo json_encode($translations_query,JSON_NUMERIC_CHECK);



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
     * @param  int  $languagr
     * @return \Illuminate\Http\Response
     */
    public function show($language)
    {
        $translations = DB::table($language)->get();
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
    //public function update(Request $request, $ID,$language,$target)
   // {
       /* DB::table('$language')
            ->where('ID', $ID)
            ->update(['Target' = '$target']); */
    //}

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
