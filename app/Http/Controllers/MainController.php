<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $products = Product::get();
        return view("index", compact('products'));
    }

    public function catalog() {
        $categories = Category::get();
        return view("catalog", compact("categories"));
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        if (!$category) {
            abort(404);
        }
//        dd($category);
        return view("category", compact("category"));
    }

    public function product($category, $product) {
        $product = Product::where('code', $product)->first();
        if (!$product) {
            abort(404);
        }
        return view("product", ["product" => $product, "category" => $category]);
    }

    public function basket() {
        return view("basket");
    }

    public function basketPlace() {
        return view("order");
    }
}
