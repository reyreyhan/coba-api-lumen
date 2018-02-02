<?php

namespace App\Http\Controllers;

use App\PensTV;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
//use Laravel\Lumen\Routing\Controller as BaseController;

class PensTVController extends Controller
{
    public function index() {
      //$Coremagz = Coremagz::all();
      $Coremagz = DB::table('penstv')
                  ->join('kategori', 'penstv.KAT_ID', '=', 'kategori.KAT_ID')
                  ->select('TV_ID','TV_NAMA','TV_LINK','TV_TGL_RILIS','TV_TGL_UPLOAD','TV_DESC','TV_LIKE','KAT_NAMA')
                  ->get('');
      return response()->json($Coremagz);
    }

    public function getPensTV($id) {
      //$Coremagz = Coremagz::find($id);
      //$Coremagz = Coremagz::find($id)->corepage;
      //dd($Coremagz);
      $Coremagz = DB::table('penstv')
                  ->join('kategori', 'penstv.KAT_ID', '=', 'kategori.KAT_ID')
                  ->where('penstv.TV_ID', '=', $id)
                  ->select('TV_ID','TV_NAMA','TV_LINK','TV_TGL_RILIS','TV_TGL_UPLOAD','TV_DESC','TV_LIKE','KAT_NAMA')
                  ->get();
      return response()->json($Coremagz);
    }

}
