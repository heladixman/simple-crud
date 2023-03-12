<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        $datas = Category::simplePaginate(10);

        return view('pages.category.index',[
            "title" => "Category",
            "data" => $datas
        ]);
    }

    public function store(Request $request){
        $categoryStore = $request->validate([
            "categoryName" => "required",
            "categoryParent" => "required"
        ]);
        Category::Create($categoryStore);
        return redirect('/category')->with('success', 'Akun Berhasil didaftarkan');
    }

    // public function show(Request $request){
    //     $category =
    // }

    public function update(){

    }

    public function delete(Category $category){
        Category::destroy($category->id);

        return redirect('/category')->with('success', 'Kategori Berhasil dihapus');
        
    }
}
