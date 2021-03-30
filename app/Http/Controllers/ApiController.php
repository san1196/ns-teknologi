<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\About;

class ApiController extends Controller
{
    public function get_all_about(Request $request)
    {
        $filter = $request->filter;
        return response()->json(About::where('keterangan','like','%'.$filter.'%')->paginate(10), 200);
    }
}

?>