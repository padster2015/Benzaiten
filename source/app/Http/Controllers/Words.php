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
    ->select('id','source',$lang)
    ->where ($lang, '=', '')
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
        
    }


    /*public function UploadAndInsert(Request $datain)
    {

        $file = $request_file->input('filename');
        $PlatformIn = $request_User->input('platform');
        $EditBy = $request_User->input('username');
        $ProductIn = $request_User->input('product');

//read the json file contents
    $jsondata = file_get_contents('message.json');
    
    //convert json object to php associative array
    $data = json_decode($jsondata, true);
    
    //get the employee details
    $SourceIn = $data['message']['source'];
    $TargetIn = $data['message']['target'];

    
    //insert into mysql table

$InsertLoad = DB::table('master')->insert(
         ['Source' => $SourceIn]);
         ['Target' => $TargetIn]);
         ['Platform' => $PlatformIn]);
         ['Product' => $ProductIn]);
         ['Last_edit_by' => $EditBy]);
echo json_encode($InsertLoad,JSON_NUMERIC_CHECK);

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
    public function edit(Request $edit)
    {
        $ToEdit = request=> $edit => word;
        $WordId = request=> $edit => id; 
        $Language = request=> $edit => lang;


$EditingWord = DB::table($Language)
            ->where('ID', $WordId)
            ->update(['Target' = $ToEdit]);

 ->get();
        echo json_encode($EditingWord,JSON_NUMERIC_CHECK);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $ID,$language,$target)
   /** {
      // DB::table('$language')
          //  ->where('ID', $ID)
         //   ->update(['Target' = '$target']); */
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
