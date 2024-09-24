<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventMaster extends Model
{
    use HasFactory, SoftDeletes;

    // You can customize the date format if needed
    protected $dates = ['deleted_at'];
}
