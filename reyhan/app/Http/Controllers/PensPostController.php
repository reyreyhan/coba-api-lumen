<?php

namespace App\Http\Controllers;

use App\Penspost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
//use Laravel\Lumen\Routing\Controller as BaseController;

class PensPostController extends Controller
{
    public function index() {
      //$Coremagz = Coremagz::all();
      $Coremagz = DB::table('penspost')
                  ->select('POST_ID','POST_NAMA','POST_TGL_RILIS','POST_IMAGE','POST_DESC','POST_LIKE')
                  ->get('');
      return response()->json($Coremagz);
    }

    public function getPensPost($id) {
      //$Coremagz = Coremagz::find($id);
      //$Coremagz = Coremagz::find($id)->corepage;
      //dd($Coremagz);
      $Coremagz = DB::table('penspost')
                  ->where('penspost.POST_ID', '=', $id)
                  ->select('POST_ID','POST_NAMA','POST_TGL_RILIS','POST_IMAGE','POST_DESC','POST_LIKE')
                  ->get();

      return response()->json($Coremagz);
    }

}
