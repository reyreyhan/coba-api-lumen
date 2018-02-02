<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class CorePage extends Model {
  protected $table = 'perpage_core';
  protected $primaryKey = 'PAGE_ID';
  protected $fillable = ['CORE_ID_PAGE','PAGE_IMAGE','PAGE_NUMBER'];

  public function coremagz() {
    return $this->belongsTo('App\Coremagz');
  }
}
?>
