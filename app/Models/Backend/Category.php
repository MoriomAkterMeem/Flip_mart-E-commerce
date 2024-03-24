<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    // Manage Category Function Create
    public function parent() {
        return $this->belongsTO(category::class,'is_parent');
    }
}
