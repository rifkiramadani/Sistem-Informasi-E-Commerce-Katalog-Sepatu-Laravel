<?php

namespace App\Models;

use App\Models\Sepatu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function sepatus() {
        return $this->hasMany(Sepatu::class, 'category_id');
    }
}
