<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
	public function index(){
        $products['products'] = Product::orderby('id','desc')->paginate(10);
        return view('product.home',$products);
	}

    public function store(Request $request){
    	$messages = [
            'required' => ':attribute Wajib Diisi',
            'max' => ':attribute Harus Diisi maksimal :max karakter',
            'min' => ':attribute Harus Diisi minimum :min karakter',
            'string' => ':attribute Hanya Diisi Huruf dan Angka',
            'confirmed' => ':attribute Konfirmasi Password Salah',
            'unique' => ':attribute Username sudah ada',
            'email' => 'attribute Format Email Salah',
        ];

        $this->validate($request,[
            'product_name' => 'required|unique:products|max:100',
            'price' => 'required|numeric',
            'stock' => 'required|numeric|min:0',
            'weight' => 'required|numeric|min:0',
        ],$messages);

    	$product = new Product;
    	$product->product_name = $request->product_name;
    	$product->price = $request->price;
    	$product->description = $request->description;
    	$product->product_rate = 0;
    	$product->stock = $request->stock;
    	$product->weight = $request->weight;
    	$product->save();
    	return redirect('/productHome');
    }

    public function show(Product $product){
    	return view('product.show', compact('product'));
    }

}
