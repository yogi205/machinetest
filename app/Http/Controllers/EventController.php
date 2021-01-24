<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    //
    function list($start,$end){
    	//echo $start;
    //	echo "<br>";
    //	echo $end;
    //	exit();
// return Event::all();
$all = DB::select("SELECT * FROM events WHERE NOT ((end <= '$start') OR (start >= '$end'))");
return $all;
    }
}
