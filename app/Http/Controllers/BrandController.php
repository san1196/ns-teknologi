<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;

class BrandController extends Controller
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
		
		$data['cek'] = Brand::count();
		$data['brand'] = Brand::where('keterangan','like','%'.$filter.'%')->paginate(10);
        return view('menu.brand.v_brand',$data);
    }
		
	public function tambah()
    {
    	return view('menu.brand.v_brand_tambah');
    }
	
	public function store(Request $request)
    {
    	$this->validate($request,[
			'image' => 'required',
    		'keterangan' => 'required',
    	],
		[
			'image.required' => 'Field Image harus diisi',
			'keterangan.required' => 'Field Keterangan harus diisi',
		]);
		
		$files1 = $request->file('image');
		
		if($files1 != null){
            $Image1 = $request->file('image')->getClientOriginalName();
            $destinationPath1 = 'uploads/brand'; 
            $files1->move($destinationPath1, $Image1);
 
			$insert = new Brand;
			$insert->image = $Image1;
			$insert->keterangan = $request->keterangan;
			$insert->save();
		}
 
    	return redirect('/brand');
    }
	
	public function edit($id)
	{
	   $data['brand'] = Brand::find($id);
	   return view('menu.brand.v_brand_edit',$data);
	}
	
	public function update($id, Request $request)
	{
		$this->validate($request,[
			//'image' => 'required',
			'keterangan' => 'required',
		],
		[
			//'image.required' => 'Field Image harus diisi',
			'keterangan.required' => 'Field Keterangan harus diisi',
		]);
	 
		$Image1 = null;
		
		$files1 = $request->file('image');
		
		$ab = Brand::find($id);
		
		if ($request->hasFile('image')) {
			$Image1 = $request->file('image')->getClientOriginalName();
			$destinationPath1 = 'uploads/brand'; 
			$files1->move($destinationPath1, $Image1);
			$ab->image = $Image1 ?? $Image1;
		}
				
		$ab->keterangan = $request->keterangan;
		$ab->save();
		return redirect('/brand');
	}
	
	public function delete($id)
	{
		$ab = Brand::find($id);
		$ab->delete();
		return redirect('/brand');
	}
}
