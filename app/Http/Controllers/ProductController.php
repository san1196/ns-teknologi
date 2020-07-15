<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
		$filter = $request->filter;
		
		$data['cek'] = Product::count();
		$data['product'] = Product::where('judul','like','%'.$filter.'%')->paginate(10);
        return view('menu.product.v_product',$data);
    }
		
	public function tambah()
    {
    	return view('menu.product.v_product_tambah');
    }
	
	public function store(Request $request)
    {
    	$this->validate($request,[
			'image' => 'required',
			'judul' => 'required',
    		'keterangan' => 'required',
    	],
		[
			'image.required' => 'Field Image harus diisi',
			'judul.required' => 'Field Judul harus diisi',
			'keterangan.required' => 'Field Keterangan harus diisi',
		]);
		
		$files1 = $request->file('image');
		
		if($files1 != null){
            $Image1 = $request->file('image')->getClientOriginalName();
            $destinationPath1 = 'uploads/product'; 
            $files1->move($destinationPath1, $Image1);
 
			$insert = new Product;
			$insert->image = $Image1;
			$insert->judul = $request->judul;
			$insert->keterangan = $request->keterangan;
			$insert->save();
		}
 
    	return redirect('/product');
    }
	
	public function edit($id)
	{
	   $data['product'] = Product::find($id);
	   return view('menu.product.v_product_edit',$data);
	}
	
	public function update($id, Request $request)
	{
		$this->validate($request,[
			//'image' => 'required',
			'judul' => 'required',
			'keterangan' => 'required',
		],
		[
			//'image.required' => 'Field Image harus diisi',
			'judul.required' => 'Field Judul harus diisi',
			'keterangan.required' => 'Field Keterangan harus diisi',
		]);
	 
		$Image1 = null;
		
		$files1 = $request->file('image');
		
		$ab = Product::find($id);
		
		if ($request->hasFile('image')) {
			$Image1 = $request->file('image')->getClientOriginalName();
			$destinationPath1 = 'uploads/product'; 
			$files1->move($destinationPath1, $Image1);
			$ab->image = $Image1 ?? $Image1;
		}
				
		$ab->judul = $request->judul;
		$ab->keterangan = $request->keterangan;
		$ab->save();
		return redirect('/product');
	}
	
	public function delete($id)
	{
		$ab = Product::find($id);
		$ab->delete();
		return redirect('/product');
	}
}
