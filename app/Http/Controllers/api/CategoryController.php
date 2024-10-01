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
            $categoryMaster = CategoryMaster::get();
            return response()->json(['status' => 200,'success' => true, 'response' => 'Data Geted', 'data' => $categoryMaster]);
        }
        catch (\Throwable $th) {
            return response()->json(['status' => 500,'success' => false, 'response' => 'Something Wrong', 'data' => null]);
        }
    }

    public function CategoryData(Request $request){
        try 
        {
            $id = $request->id;

            $categoryData = CategoryMaster::with(['categoryData' => function ($query) {
                $query->with(['productFile']);
            }])
            ->find($id);

            return response()->json(['status' => 200,'success' => true, 'response' => 'Data Geted', 'data' => $categoryData]);
        }
        catch (\Throwable $th) {
            return response()->json(['status' => 500,'success' => false, 'response' => 'Something Wrong', 'data' => $th]);
        }
    }
}
