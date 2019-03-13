<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop.index')->withProducts($products);
    }

    public function getAddToCart(Request $request, $id)
    {
        $products = Product::find($id);
        //dd($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($products, $products->id);
 
        $request->session()->put('cart', $cart);
        return $this->index();
    }
    
    public function getCart() {
        if (!Session::has('cart')) {
            return view('cart.shopping_cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart.shopping_cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getPaypalCheckout() {
        if (!Session::has('cart')) {
            return view('cart.shopping_cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('cart.checkout', ['total' => $total]);
    }

    public function postPaypalCheckout() {
        if (!Session::has('cart')) {
            return redirect()->route('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        try {
            create(array(
                "amount" => $cart->totalPrice,
                "currency" => "eur",
                "source" => $request->input('stripeToken'),
                "description" => "Test Charge"
            ));
        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('product.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop.product_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->imagePath = "";
        $product->title = $request['title'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        
        $product->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Product::find($id);
        return view('shop.product')->withProduit($produit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Product::find($id);
        return view('shop.product_edit')->withProduit($produit);
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

        $product = Product::find($id);

        $product->title = $request['title'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        
        $product->save();

        $produit = Product::find($id);
        return view('shop.product_edit')->withProduit($produit)->withUpdated('PRODUIT MODIFIE');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id', $id)->delete();
        return $this->index()->withDeleted('PRODUIT SUPPRIME');
    }
}
