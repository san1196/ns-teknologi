<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;

class AboutController extends Controller
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
		// $filter = $request->filter;
		
		// $data['cek'] = About::count();
		// $data['about'] = About::where('keterangan','like','%'.$filter.'%')->paginate(10);
        // return view('menu.about.v_about',$data);

		$url = 'http://147.139.185.163:81/api/about';
		$json_data = file_get_contents($url);

		// Decode JSON data into PHP array
		$about = json_decode($json_data);

        return view('menu.about.v_about', compact('about'));
    }
		
	public function tambah()
    {
    	return view('menu.about.v_about_tambah');
    }
	
	public function store(Request $request)
    {
    	$this->validate($request,[
    		'keterangan' => 'required',
    	],
		[
			'keterangan.required' => 'Field Keterangan harus diisi',
		]);
 
        About::create([
    		'keterangan' => $request->keterangan,
    	]);
 
    	return redirect('/about');
    }
	
	public function edit($id)
	{
	   $data['about'] = About::find($id);
	   return view('menu.about.v_about_edit',$data);
	}
	
	public function update($id, Request $request)
	{
		$this->validate($request,[
		   'keterangan' => 'required',
		],
		[
			'keterangan.required' => 'Field Keterangan harus diisi',
		]);
	 
		$ab = About::find($id);
		$ab->keterangan = $request->keterangan;
		$ab->save();
		return redirect('/about');
	}
	
	public function delete($id)
	{
		$ab = About::find($id);
		$ab->delete();
		return redirect('/about');
	}
}
