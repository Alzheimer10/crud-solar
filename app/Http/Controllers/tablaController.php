<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Response;
use Eloquent;
use DB;
use Flash;
class tablaController extends Controller
{
    protected $connection = 'ohm_v2'; 
    /**
     *
     * @param Request $request
     * @return Response
     */
    public function index($tabla)
    {
        $query = "SELECT column_name FROM information_schema.columns WHERE table_name = '".$tabla."'";
        $colums = DB::connection('ohm_v2')->select($query);
        $rows = DB::connection($this->connection)
                    ->table($tabla)
                    ->get()->toArray();
		return View('tablas.index')->with('rows',$rows)->with('colums',$colums)->with('name_tabla',$tabla);
    }
}
