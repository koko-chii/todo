<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        // categoriesテーブルのデータをすべて取得
        $categories = Category::all();

        // category.blade.phpにデータを渡して表示
        return view('category', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $category = $request->only(['name']);
        Category::create($category);

        return redirect('/categories')->with('message', 'カテゴリを作成しました');
    }

    public function update(CategoryRequest $request)
    {
        $category = $request->only(['name']);
        Category::find($request->id)->update($category);

        return redirect()->route('categories.index')->with('message', 'カテゴリを更新しました');
    }


    public function destroy(Request $request)
    {
        Category::find($request->id)->delete();

        return redirect('/categories')->with('message', 'カテゴリを削除しました');
    }
}
