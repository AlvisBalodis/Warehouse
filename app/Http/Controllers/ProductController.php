<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;


class ProductController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('products.index', [
            'products' => Product::latest()
                ->paginate(20)
        ]);
    }

    public function show(Product $product): Factory|View|Application
    {
        return view('products.show', [
            'product' => $product
        ]);
    }

    public function create(): Factory|View|Application
    {
        return view('products.create');
    }

    public function store(Request $request): Redirector|Application|RedirectResponse
    {
        $product = Product::create($request->validate([
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|integer|min:0'
        ]));

        return redirect('/products');
    }

    public function destroy(Product $product): Redirector|Application|RedirectResponse
    {
        $product->delete($product);

        return redirect('/products');
    }
}
