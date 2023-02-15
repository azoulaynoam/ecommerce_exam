<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display all products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::all();
        $isFavorite = false;
        $cart = $request->session()->get('cart', []);

        return view('main', compact('products', 'cart', 'isFavorite'));
    }

    /**
     * Display all favorite products.
     */

    public function favorites(Request $request)
    {
        $products = Product::where('favorite', true)->get();
        $isFavorite = true;
        $cart = $request->session()->get('cart', []);

        return view('main', compact('products', 'cart', 'isFavorite'));
    }

    /**
     * Add a product to the cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add_to_cart(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $cart = $request->session()->get('cart', []);

        if (array_key_exists($product->id, $cart)) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'discount' => $product->discount,
                'quantity' => 1,
            ];
        }

        $request->session()->put('cart', $cart);

        return redirect()->back();
    }

    /**
     * Update the quantity of a product in the cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_cart(Request $request, $id)
    {
        $cart = $request->session()->get('cart', []);

        if ($request->input('quantity') <= 0) {
            unset($cart[$id]);
            $request->session()->put('cart', $cart);
            return redirect()->back();
        }

        $cart[$id]['quantity'] = $request->input('quantity');

        $request->session()->put('cart', $cart);

        return redirect()->back();
    }

    public function remove_from_cart(Request $request, $id)
    {
        $cart = $request->session()->get('cart', []);

        unset($cart[$id]);

        $request->session()->put('cart', $cart);

        return redirect()->back();
    }

    public function favorite(Product $product)
    {
        $product->favorite = !$product->favorite;
        $product->save();

        return redirect()->back();
    }
}
