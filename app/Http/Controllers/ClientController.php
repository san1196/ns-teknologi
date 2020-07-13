<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

class ClientController extends Controller
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
		
		$data['cek'] = Client::count();
		$data['client'] = Client::where('keterangan','like','%'.$filter.'%')->paginate(10);
        return view('menu.client.v_client',$data);
    }
		
	public function tambah()
    {
    	return view('menu.client.v_client_tambah');
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
            $destinationPath1 = 'uploads/client'; 
            $files1->move($destinationPath1, $Image1);
 
			$insert = new Client;
			$insert->image = $Image1;
			$insert->keterangan = $request->keterangan;
			$insert->save();
		}
 
    	return redirect('/client');
    }
	
	public function edit($id)
	{
	   $data['client'] = Client::find($id);
	   return view('menu.client.v_client_edit',$data);
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
		
		$ab = Client::find($id);
		
		if ($request->hasFile('image')) {
			$Image1 = $request->file('image')->getClientOriginalName();
			$destinationPath1 = 'uploads/client'; 
			$files1->move($destinationPath1, $Image1);
			$ab->image = $Image1 ?? $Image1;
		}
		
		$ab->keterangan = $request->keterangan;
		$ab->save();
		return redirect('/client');
	}
	
	public function delete($id)
	{
		$ab = Client::find($id);
		$ab->delete();
		return redirect('/client');
	}
}
