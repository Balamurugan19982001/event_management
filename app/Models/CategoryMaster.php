<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMaster extends Model
{
    use HasFactory;

    // Define the relationship
    public function categoryData()
    {
        return $this->hasMany(CategoryData::class, 'master_id', 'id');
    }
}
