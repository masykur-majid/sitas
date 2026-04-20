<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index()
    {
        //ngambil semua data yang ada di tabel cetegories
        $categories = Category::all();

        return view()
    }
}
