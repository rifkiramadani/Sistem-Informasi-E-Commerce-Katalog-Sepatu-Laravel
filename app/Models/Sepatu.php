<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Sepatu extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    protected $fillable = [
        'nama',
        'category_id',
        'img',
        'harga',
        'deskripsi',
        'excerpt'
    ];
}
