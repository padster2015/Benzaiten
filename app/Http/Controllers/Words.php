<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     
     header('Content-Type: text/html; charset=utf-8');
 error_reporting(E_ALL);
$host="localhost"; 
$username="fitr"; 
$password="H097729422a!"; 
$db_name="Benzaiten"; 
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_set_charset('utf8');
mysql_select_db("$db_name")or die("cannot select DB");


$sql = ""; 
$result = mysql_query($sql);

$json = array();

$email= $_GET["account"];
$token=$_GET["pwd"];

$fetch = mysql_query("SELECT * FROM `Master` "); 

while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {
    
        $row_array['ID'] = $row['ID'];
            $row_array['Source'] = $row['Source'];
                $row_array['Target'] = $row['Target'];
                $row_array['Last_edit_by'] = $row['Last_edit_by'];
                $row_array['Date_Time_Edit'] = $row['Date_Time_Edit'];
                $row_array['Previous_Edit'] = $row['Previous_Edit'];
                $row_array['Platform'] = $row['Platform'];
                $row_array['Product'] = $row['Product'];

 array_push($json,$row_array);
    }

echo json_encode($json,JSON_NUMERIC_CHECK);


          }
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
