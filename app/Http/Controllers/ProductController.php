<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Color;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categoryID = '')
    {
        if ($categoryID == '') {
            $products = Product::paginate(9);
            $subCategories = SubCategory::all();
        } else {
            $products = Product::where('category_id', $categoryID)->paginate(9);
        }
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $colors = Color::all();
        $subCategoryID = "";

        return view('products.catalog', [
            "products" => $products,
            "categories" => $categories,
            "categoryID" => $categoryID,
            "subCategories" => $subCategories,
            "subCategoryID" => $subCategoryID,
            "colors" => $colors
        ]);
    }

    public function index_sub($subCategoryID = '')
    {
        if ($subCategoryID == '') {
            $products = Product::paginate(9);
        } else {
            $products = Product::where('sub_category_id', $subCategoryID)->paginate(9);
        }
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $colors = Color::all();
        $categoryID = "";

        return view('products.catalog', [
            "products" => $products,
            "categories" => $categories,
            "subCategoryID" => $subCategoryID,
            "categoryID" => $categoryID,
            "subCategories" => $subCategories,
            "colors" => $colors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
