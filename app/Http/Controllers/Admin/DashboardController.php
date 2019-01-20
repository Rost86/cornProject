<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use App\Product;
use App\Catalog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard', [
            'products' => Product::lastProducts(5),
            'articles' => Article::lastArticles(5),
            'count_articles' => Article::count(),
        ]);
     }
}