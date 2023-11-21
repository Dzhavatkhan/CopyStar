<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

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
    }
    public function addProduct(Request $request)
    {
        //
    }
    public function deleteProduct(Request $request)
    {
        //
    }
    public function deleteOrder(Request $request)
    {
        //
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
        //
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
