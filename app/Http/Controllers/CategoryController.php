<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        return view('category.index', [
            'title' => 'Category',
            'navtitle' => 'category',
            'categories' => Category::all()
        ]);
    }
}
