<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryData;
use App\Models\CategoryMaster;

class ProductController extends Controller
{
    public function productDetails(Request $request) {
        $category_id = $request->category_id;
        $product_id  = $request->product_id;

        $productDetails = CategoryMaster::with(['categoryData' => function ($query) use($product_id) {
                $query->where('id',$product_id)
                ->with(['productFile']);
            }])
        ->find($category_id);

        return response()->json(['status' => 200,'success' => true, 'response' => 'Data Geted', 'data' => $productDetails]);
    }
}
