<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // categoriesテーブルのデータをすべて取得
        $categories = Category::all();

        // category.blade.phpにデータを渡して表示
        return view('category', compact('categories'));
    }
}
