<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\About;

class ApiController extends Controller
{
    public function get_all_about()
    {
        return response()->json(About::all(), 200);
    }
}

?>