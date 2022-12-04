<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Color;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StoreController extends Controller
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
        $products = Product::all();
        $categories = Category::all();
        $subCategory = SubCategory::all();
        return view('products.catalog', ['products' => $products, 'categories' => $categories, 'subCategories' => $subCategory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subCategory = SubCategory::all();
        return view('store.create', ['subCategory' => $subCategory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->category_id == 1) {
            $this->validate($request, [
                'product_name' => 'required|max:255',
                'code' => 'max:255|unique:products',
                'category_id' => 'required',
                'length' => 'regex:/^(([0-9]*)(\.([0-9]+))?)$/',
                'sub_category' => 'required',
                'image' => 'image|file|max:1024'
            ]);
            $product = new Product();
            $product->product_name = $request->product_name;
            $product->code = $request->code;
            $product->category_id = $request->category_id;
            $product->length = $request->length;
            $product->subcategory_id = $request->sub_category;
            $path = $request->file('img')->storePublicly('images', 'public');
            $product->img = $path;
            $product->save();
            $product->color()->attach([1, 2, 3, 4]);
        } else if ($request->category_id == 2) {
            $this->validate($request, [
                'img' => 'required|image|file|max:1024',
                'category_id' => 'required',
            ]);
            $product = new Product();
            $product->category_id = $request->category_id;
            $path = $request->file('img')->storePublicly('images', 'public');
            $product->img = $path;
            $product->save();
        } else if ($request->category_id == 3) {
            $this->validate($request, [
                'product_name' => 'required|max:255',
                'img' => 'image|file|max:1024',
                'category_id' => 'required',
            ]);
            $product = new Product();
            $product->product_name = $request->product_name;
            $product->category_id = $request->category_id;
            $path = $request->file('img')->storePublicly('images', 'public');
            $product->img = $path;
            $product->save();
        } else if ($request->category_id == 4) {
            $this->validate($request, [
                'product_name' => 'required|max:255',
                'img' => 'image|file|max:1024',
                'category_id' => 'required',
                'description' => 'max:300',
            ]);
            // dd($request);
            $product = new Product();
            $product->product_name = $request->product_name;
            $product->category_id = $request->category_id;
            $path = $request->file('img')->storePublicly('images', 'public');
            $product->img = $path;
            $product->description = $request->description;
            $product->link_shoope = $request->link_shoope;
            $product->link_tokopedia = $request->link_tokopedia;
            $product->save();
        } else {
            abort(404);
        }
        Alert::success('Success', 'New product added successfully');
        return redirect()->back();
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
        $product = Product::findOrFail($id);

        if ($product->category_id == 1) {
            $subCategory = SubCategory::all();
            return view('edit.aluminium', ['product' => $product, 'subCategory' => $subCategory]);
        } else if ($product->category_id == 2) {
            return view('edit.kaca', ['product' => $product]);
        } else if ($product->category_id == 3) {
            return view('edit.stainless', ['product' => $product]);
        } else if ($product->category_id == 4) {
            return view('edit.accesories', ['product' => $product]);
        }
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
        if ($request->category_id == 1) {
            $this->validate($request, [
                'product_name' => 'required|max:255',
                'code' => "max:255|unique:products,code,{$id}",
                'category_id' => 'required',
                'length' => 'regex:/^(([0-9]*)(\.([0-9]+))?)$/',
                'sub_category' => 'required',
                'image' => 'image|file|max:1024'
            ]);
            $product = Product::findOrFail($id);
            $product->product_name = $request->product_name;
            $product->code = $request->code;
            $product->category_id = $request->category_id;
            $product->length = $request->length;
            $product->subcategory_id = $request->sub_category;
            if ($request->img) {
                $path = $request->file('img')->storePublicly('images', 'public');
                $product->img = $path;
            }
            $product->save();
            Alert::success('Success', 'Product Edited Successfully');
            // $product->color()->attach([1, 2, 3, 4]);
        } else if ($request->category_id == 2) {
            $this->validate($request, [
                'img' => 'required|image|file|max:1024',
                'category_id' => 'required',
            ]);
            $product = Product::findOrFail($id);
            $product->category_id = $request->category_id;
            if ($request->img) {
                $path = $request->file('img')->storePublicly('images', 'public');
                $product->img = $path;
            }
            $product->save();
            Alert::success('Success', 'Product Edited Successfully');
        } else if ($request->category_id == 3) {
            $this->validate($request, [
                'product_name' => 'required|max:255',
                'img' => 'image|file|max:1024',
                'category_id' => 'required',
            ]);
            $product = Product::findOrFail($id);
            $product->product_name = $request->product_name;
            $product->category_id = $request->category_id;
            if ($request->img) {
                $path = $request->file('img')->storePublicly('images', 'public');
                $product->img = $path;
            }
            $product->save();
            Alert::success('Success', 'Product Edited Successfully');
        } else if ($request->category_id == 4) {
            $this->validate($request, [
                'product_name' => 'required|max:255',
                'img' => 'image|file|max:1024',
                'category_id' => 'required',
                'description' => 'max:300',
            ]);
            // dd($request);
            $product = Product::findOrFail($id);
            $product->product_name = $request->product_name;
            $product->category_id = $request->category_id;
            if ($request->img) {
                $path = $request->file('img')->storePublicly('images', 'public');
                $product->img = $path;
            }
            $product->description = $request->description;
            $product->link_shoope = $request->link_shoope;
            $product->link_tokopedia = $request->link_tokopedia;
            $product->save();
            Alert::success('Success', 'Product Edited Successfully');
        } else {
            abort(404);
        }
        return redirect('/stores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
}
