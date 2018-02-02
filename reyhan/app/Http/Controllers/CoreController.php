<?php

namespace App\Http\Controllers;

use App\Coremagz;
use App\CorePage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
//use Laravel\Lumen\Routing\Controller as BaseController;

class CoreController extends Controller
{
    public function index() {
      //$Coremagz = Coremagz::all();
      $Coremagz = DB::table('coremagz')
                  ->select('CORE_ID','CORE_JUDUL','CORE_DESC','CORE_FOLDER','CORE_TGL_RILIS','CORE_TGL_UPLOAD','CORE_LIKE')
                  ->get('');
      return response()->json($Coremagz);
    }

    public function getCore($id) {
      //$Coremagz = Coremagz::find($id);
      //$Coremagz = Coremagz::find($id)->corepage;
      //dd($Coremagz);
      $Coremagz = DB::table('coremagz')
                  ->join('perpage_core', 'coremagz.CORE_ID', '=', 'perpage_core.CORE_ID_PAGE')
                  ->where('coremagz.CORE_ID', '=', $id)
                  ->select('CORE_ID','CORE_JUDUL','CORE_DESC','CORE_FOLDER','CORE_TGL_RILIS','CORE_TGL_UPLOAD','CORE_LIKE','PAGE_IMAGE','PAGE_NUMBER')
                  ->get();

      return response()->json($Coremagz);
    }

}
