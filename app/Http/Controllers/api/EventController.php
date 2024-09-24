<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventData;
use App\Models\EventMaster;

class EventController extends Controller
{
    public function eventCategory(Request $request){
        try 
        {
            $EventMaster = EventMaster::get();
            return response()->json(['status' => 200,'success' => true, 'response' => 'Data Geted', 'data' => $EventMaster]);
        }
        catch (\Throwable $th) {
            return response()->json(['status' => 500,'success' => false, 'response' => 'Something Wrong', 'data' => null]);
        }
    }

    public function eventData(Request $request){
        try 
        {
            $id = $request->id;
            $EventData = EventData::where('event_id', $id)->get();
            return response()->json(['status' => 200,'success' => true, 'response' => 'Data Geted', 'data' => $EventData]);
        }
        catch (\Throwable $th) {
            return response()->json(['status' => 500,'success' => false, 'response' => 'Something Wrong', 'data' => null]);
        }
    }
}
