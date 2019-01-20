<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Product;
use Illuminate\Http\Request;


class CatalogController extends Controller
{   
    
    public function catalog($slug) {
    	$catalog = Catalog::where('slug', $slug)->first();
    	return view('catalog.catalog', [
            'catalog' => $catalog,
            'products' => $catalog->products()->where('published', 1)->paginate(12)
    	]);
    }
    public function product($slug) {
    	return view('catalog.product', [
    		'product' => Product::where('slug', $slug)->first()
    	]);
    }
}
