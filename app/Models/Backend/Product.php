<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Manage With Product Name
    public function brand() {
        return $this->belongsTo(Brand::class,'brand_id');
    }
    // Same Process
    public function category() {
        return $this->belongsTo(Category::class,'category_id');
    }
}
