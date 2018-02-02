<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Coremagz extends Model {
  protected $table = 'coremagz';
  protected $primaryKey = 'CORE_ID';
  protected $fillable = ['CORE_JUDUL','CORE_DESC','CORE_TGL_RILIS','CORE_TGL_UPLOAD'];

  /*public function corepage() {
    return $this->hasMany('App\CorePage');
  }*/
}
?>
