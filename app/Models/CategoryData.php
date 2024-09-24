<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryData extends Model
{
    use HasFactory;

    // Define the inverse relationship
    public function categoryMaster()
    {
        return $this->belongsTo(CategoryMaster::class, 'id', 'master_id');
    }
}
