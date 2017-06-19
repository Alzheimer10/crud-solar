<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Config;
use DB;

class appServiceController 
{
    public function ohm_v2() {
        $query = "SELECT tablename FROM pg_tables WHERE schemaname = 'public'";
        $tablasOhm_v2 = DB::connection('ohm_v2')->select($query);
        $tablas = array();
        foreach ($tablasOhm_v2 as $tabla) {
            $query = "SELECT column_name FROM information_schema.columns WHERE table_name = '".$tabla->tablename."'";
            $colums = DB::connection('ohm_v2')->select($query);
            $tablas = array_add($tablas, $tabla->tablename, $colums);
        }
        return(Collection::make($tablas));
    }
    
    public function mi_energia() {
        $query = "SELECT tablename FROM pg_tables WHERE schemaname = 'public'";
        $tablasOhm_v2 = DB::connection('mi_energia')->select($query);
        $tablas = array();
        foreach ($tablasOhm_v2 as $tabla) {
            $query = "SELECT column_name FROM information_schema.columns WHERE table_name = '".$tabla->tablename."'";
            $colums = DB::connection('mi_energia')->select($query);
            $tablas = array_add($tablas, $tabla->tablename, $colums);
        }
        return(Collection::make($tablas));
    }
}
