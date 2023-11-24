<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin  = Auth::user();
        $categories = Category::all();
        return view("admin.admin", compact('admin', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all([
            "email",
            "password"
        ]);
        $admin = Admin::create([
            "email" => $data['email'],
            "password" => bcrypt($data['password'])
        ]);
        if ($admin) {
            return response()->json([
                "status" => 200,
                "message" => "Админ добавлен"
            ],200)->header("Content-type", "application/json");
        }
    }
    public function slider(Request $request){
        $image = $request->image;
        Slider::create([
            "img" => $image
        ]);
    }
    public function addProduct(Request $request)
    {
        $data = $request->all([
            "name",
            "image",
            "quantity",
            "category_id",
            "price"

        ]);
        $category_id = Category::query()->where('name', $data['category_id'])->first()->id;
        $name_image = time().'.'.$request->image->extension();
        $request->image->move(public_path('img/products'), $name_image);
        $product_created = Product::create([
            "name" => $data['name'],
            "image" => $name_image,
            "quantity" => $data['quantity'],
            "category_id" => $category_id,
            "price" => $data['price']
        ]);
        if ($product_created) {
            return response()->json([
                "status" => 200,
                "message" => "Продукт добавлен"
            ],200)->header("Content-type", "application/json");
        }
    }
    public function getProducts(){
        $categories = Category::all();
        // $products = DB::table('products')->leftJoin('categories', 'products.category_id', 'categories.id')->select("products.name, products.price, products.image, categories.name AS 'category'");
        $products = DB::select("SELECT products.*, categories.name AS 'category' FROM products LEFT JOIN categories ON products.category_id = categories.id");
        return view('components.ajax.admin.products', compact('products', 'categories'));
    }
    public function deleteProduct(Request $request)
    {
        $product_id = $request->product_id;
        $image = Product::findOrFail($product_id)->image;
        $check_product = DB::table('orders')->leftJoin("carts", "orders.cart_id", "carts.id")->where("product_id", $product_id);
        if ($check_product) {
            $check_product->delete();
            Product::query()->where("id", $product_id)->delete();
            return response()->json([
                "status" => 200,
                "message" => "Продукт удален"
            ],200)->header("Content-type", "application/json");
        }
        else{
            $product = Product::query()->where("id", $product_id);
            $product->delete();
        }
        if (file_exists(public_path('img/products/'.$image))) {
            unlink(public_path("img/products/".$image));
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::query()->where('id', $id)->first();
        $name = $request->name;
        $image = $product->image;
        $category = $request->category_id;
        $category = Category::query()->where("name", $category)->first();
        $category = $category->id;
        $price = $request->price;
        if (isset($request->image)) {
            $image = $request->image;
        }
        else{
            $image = $product->image;
        }
        if (file_exists(public_path('img/products/'.$image))) {
            unlink(public_path("img/products/".$image));
        }
        $image = time().'.'.$request->image->extension();

        $product->update([
            "name" => $name,
            "quantity" => $request->quantity,
            "category_id" => $category,
            "image" => $image,
            "price" => $price
        ]);
        $request->image->move(public_path('img/products'), $image);

        return redirect()->back();
    }

    public function log_out(){
        auth('admin')->logout();
        return redirect()->route('home');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
    }
}
