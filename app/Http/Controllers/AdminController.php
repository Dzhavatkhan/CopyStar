<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Order;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $data = $request->validated([
            "name",
            "category",
            "price"

        ]);
        $product_created = Product::create([
            "name" => $data['name'],
            "category" => $data['category'],
            "price" => $data['price']
        ]);
        if ($product_created) {
            return response()->json([
                "status" => 200,
                "message" => "Продукт добавлен"
            ],200)->header("Content-type", "application/json");
        }
    }
    public function deleteProduct(Request $request)
    {
        $product_id = $request->product_id;
        $check_product = Order::all()->where("product_id");
        if ($check_product) {
            $check_product->delete();
            Product::all()->where("id", $product_id)->delete();
            return response()->json([
                "status" => 200,
                "message" => "Продукт удален"
            ],200)->header("Content-type", "application/json");
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
        $product = Product::findOrFail($id);
        $name = $request->name;
        $category = $request->category;
        $price = $request->price;
        $product::update([
            "name" => $name,
            "category" => $category,
            "price" => $price
        ]);
        return response()->json([
            "message" => "Product is update"
        ],200)->header("Content-type", "application/json");
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
