<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all(); // Menggunakan model Produk
        return view('index', compact('products'));
    }

    public function list()
    {
        $products = Product::all();
        return view('product.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Gambar' => 'required|url',
            'Nama' => 'required',
            'Berat' => 'required|numeric',
            'Harga' => 'required|numeric',
            'Stok' => 'required|numeric',
            'Kondisi' => 'required',
            'Deskripsi' => 'required',
        ]);

        $products = new Product();
        $products->Gambar = $request->Gambar;
        $products->Nama = $request->Nama;
        $products->Berat = $request->Berat;
        $products->Harga = $request->Harga;
        $products->Stok = $request->Stok;
        $products->Kondisi = $request->Kondisi;
        $products->Deskripsi = $request->Deskripsi;
        $products->save();

        return redirect()->route('product.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = Product::find($id);

        return view('product.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Product::where('id', $id)->update([
            'Gambar' => $request->Gambar,
            'Nama' => $request->Nama,
            'Berat' => $request->Berat,
            'Harga' => $request->Harga,
            'Stok' => $request->Stok,
            'Kondisi' => $request->Kondisi,
            'Deskripsi' => $request->Deskripsi,
        ]);

        return redirect()->route('product.index')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();

        return redirect()->route('product.list')->with('success', 'Product deleted successfully');
    }
}
