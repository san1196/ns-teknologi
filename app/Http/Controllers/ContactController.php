<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
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
		
		$data['cek'] = Contact::count();
		$data['contact'] = Contact::where('alamat','like','%'.$filter.'%')->paginate(10);
        return view('menu.contact.v_contact',$data);
    }
		
	public function tambah()
    {
    	return view('menu.contact.v_contact_tambah');
    }
	
	public function store(Request $request)
    {
    	$this->validate($request,[
    		'lokasi' => 'required',
    		'alamat' => 'required',
    		'telepon' => 'required',
    		'email' => 'required',
    	],
		[
			'lokasi.required' => 'Field Lokasi harus diisi',
			'alamat.required' => 'Field Alamat harus diisi',
			'telepon.required' => 'Field Telepon harus diisi',
			'email.required' => 'Field Email harus diisi',
		]);
 
        Contact::create([
    		'lokasi' => $request->lokasi,
    		'alamat' => $request->alamat,
    		'telepon' => $request->telepon,
    		'email' => $request->email,
    	]);
 
    	return redirect('/contact');
    }
	
	public function edit($id)
	{
	   $data['contact'] = Contact::find($id);
	   return view('menu.contact.v_contact_edit',$data);
	}
	
	public function update($id, Request $request)
	{
		$this->validate($request,[
    		'lokasi' => 'required',
    		'alamat' => 'required',
    		'telepon' => 'required',
    		'email' => 'required',
    	],
		[
			'lokasi.required' => 'Field Lokasi harus diisi',
			'alamat.required' => 'Field Alamat harus diisi',
			'telepon.required' => 'Field Telepon harus diisi',
			'email.required' => 'Field Email harus diisi',
		]);
	 
		$ab = Contact::find($id);
		$ab->lokasi = $request->lokasi;
		$ab->alamat = $request->alamat;
		$ab->telepon = $request->telepon;
		$ab->email = $request->email;
		$ab->save();
		return redirect('/contact');
	}
	
	public function delete($id)
	{
		$ab = Contact::find($id);
		$ab->delete();
		return redirect('/contact');
	}
}
