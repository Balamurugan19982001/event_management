<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryData;
use App\Models\CategoryMaster;

class CategoryController extends Controller
{
    public function categoryList(Request $request){
        try 
        {
            $CategoryMaster = CategoryMaster::get();
            return response()->json(['status' => 200,'success' => true, 'response' => 'Data Geted', 'data' => $CategoryMaster]);
        }
        catch (\Throwable $th) {
            return response()->json(['status' => 500,'success' => false, 'response' => 'Something Wrong', 'data' => null]);
        }
    }

    public function CategoryData(Request $request){
        try 
        {
            $id = $request->id;
            $CategoryData = CategoryData::where('event_id', $id)->get();
            return response()->json(['status' => 200,'success' => true, 'response' => 'Data Geted', 'data' => $CategoryData]);
        }
        catch (\Throwable $th) {
            return response()->json(['status' => 500,'success' => false, 'response' => 'Something Wrong', 'data' => null]);
        }
    }
}
