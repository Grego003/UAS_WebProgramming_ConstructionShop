<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use RealRashid\SweetAlert\Facades\Alert;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categoryID = 1)
    {
        if ($categoryID == '') {
            $products = Product::paginate(9);
        } else {
            $products = Product::where('category_id', $categoryID)->with(['category', 'color'])->paginate(9);
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
            $products = Product::where('sub_category_id', $subCategoryID)->with(['category', 'color'])->paginate(9);
        }
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $colors = Color::all();
        if (in_array($subCategoryID, [1, 2, 3, 4, 5, 6])) {
            $categoryID = 1;
        } else if (in_array($subCategoryID, [7, 8, 9, 10])) {
            $categoryID = 4;
        } else {
            $categoryID = "";
        }

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
        if (!Gate::allows('only_admin')) {
            abort(403);
        }
        $key = Auth::id();
        $admin = User::findOrFail($key);
        $subCategory = SubCategory::all();
        $colors = Color::all();
        return view('store.create', ['subCategory' => $subCategory, 'colors' => $colors, 'admin' => $admin]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Gate::allows('only_admin')) {
            abort(403);
        }
        if ($request->category_id == 1) {
            $this->validate($request, [
                'product_name' => 'required|max:255',
                'code' => 'max:5|unique:products',
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
            $product->sub_category_id = $request->sub_category;
            if ($request->img) {
                $path = $request->file('img')->storePublicly('asset', 'public');
                $product->src_img = $path;
            }
            $product->save();
            $product->color()->attach($request->color);
        } else if ($request->category_id == 2) {
            $this->validate($request, [
                'img' => 'required|image|file|max:1024',
                'category_id' => 'required',
            ]);
            $product = new Product();
            $product->category_id = $request->category_id;
            $path = $request->file('img')->storePublicly('asset', 'public');
            $product->src_img = $path;
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
            if ($request->img) {
                $path = $request->file('img')->storePublicly('asset', 'public');
                $product->src_img = $path;
            }
            $product->save();
        } else if ($request->category_id == 4) {
            $this->validate($request, [
                'product_name' => 'required|max:255',
                'img' => 'image|file|max:1024',
                'category_id' => 'required',
                'stock' => 'max:100000000000|required',
                'harga' => 'max:100000000000|required',
                'description' => 'max:300',
                'sub_category' => 'required',
                'link_shopee' => 'url',
                'link_tokopedia' => 'url',
            ]);
            // dd($request);
            $product = new Product();
            $product->product_name = $request->product_name;
            $product->category_id = $request->category_id;
            $product->sub_category_id = $request->sub_category;
            if ($request->img) {
                $path = $request->file('img')->storePublicly('asset', 'public');
                $product->src_img = $path;
            }
            $product->description = $request->description;
            $product->stock = $request->stock;
            $product->harga = $request->harga;
            $product->link_shopee = $request->link_shoope;
            $product->link_tokopedia = $request->link_tokopedia;
            $product->save();
        } else {
            return redirect();
        }
        Alert::success('Success', 'New product added successfully');
        return redirect('/products/' . $request->category_id);
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
        if (!Gate::allows('only_admin')) {
            abort(403);
        }
        $product = Product::findOrFail($id);
        $subCategory = SubCategory::all();
        $colors = Color::all();
        $mycolor = [];
        $i = 0;
        foreach ($product->color as $col) {
            $mycolor[$i] = $col->id;
            $i++;
        }

        if ($product->category_id == 1) {
            return view('edit.aluminium', ['product' => $product, 'subCategory' => $subCategory, 'colors' => $colors, 'mycolor' => $mycolor]);
        } else if ($product->category_id == 2) {
            return view('edit.kaca', ['product' => $product]);
        } else if ($product->category_id == 3) {
            return view('edit.stainless', ['product' => $product]);
        } else if ($product->category_id == 4) {
            return view('edit.accesories', ['product' => $product, 'subCategory' => $subCategory]);
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
        if (!Gate::allows('only_admin')) {
            abort(403);
        }
        if ($request->category_id == 1) {
            $this->validate($request, [
                'product_name' => 'required|max:255',
                'code' => "max:5|unique:products,code,{$id}",
                'category_id' => 'required',
                'length' => 'regex:/^(([0-9]*)(\.([0-9]+))?)$/',
                'sub_category' => 'required',
                'image' => 'image|file|max:1024',
            ]);
            $product = Product::findOrFail($id);
            $product->product_name = $request->product_name;
            $product->code = $request->code;
            $product->category_id = $request->category_id;
            $product->length = $request->length;
            $product->sub_category_id = $request->sub_category;
            if ($request->img) {
                $path = $request->file('img')->storePublicly('asset', 'public');
                $product->src_img = $path;
            }
            $product->save();
            Alert::success('Success', 'Product Edited Successfully');
            $product->color()->detach([1, 2, 3, 4]);
            $product->color()->attach($request->color);
        } else if ($request->category_id == 2) {
            $this->validate($request, [
                'img' => 'required|image|file|max:1024',
                'category_id' => 'required',
            ]);
            $product = Product::findOrFail($id);
            $product->category_id = $request->category_id;
            if ($request->img) {
                $path = $request->file('img')->storePublicly('asset', 'public');
                $product->src_img = $path;
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
                $path = $request->file('img')->storePublicly('asset', 'public');
                $product->src_img = $path;
            }
            $product->save();
            Alert::success('Success', 'Product Edited Successfully');
        } else if ($request->category_id == 4) {
            $this->validate($request, [
                'product_name' => 'required|max:255',
                'img' => 'image|file|max:1024',
                'category_id' => 'required',
                'description' => 'max:300',
                'stock' => 'max:100000000000|required',
                'harga' => 'max:100000000000|required',
                'link_shopee' => 'url',
                'link_tokopedia' => 'url',
            ]);
            // dd($request);
            $product = Product::findOrFail($id);
            $product->product_name = $request->product_name;
            $product->category_id = $request->category_id;
            $product->sub_category_id = $request->sub_category;
            if ($request->img) {
                $path = $request->file('img')->storePublicly('asset', 'public');
                $product->src_img = $path;
            }
            $product->description = $request->description;
            $product->stock = $request->stock;
            $product->harga = $request->harga;
            $product->link_shopee = $request->link_shoope;
            $product->link_tokopedia = $request->link_tokopedia;
            $product->save();
            Alert::success('Success', 'Product Edited Successfully');
        } else {
            return redirect();
        }
        return redirect('/products/' . $request->category_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Gate::allows('only_admin')) {
            abort(403);
        }
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
}
