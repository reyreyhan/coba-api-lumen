<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PensTV extends Model {
  protected $table = 'penstv';
  protected $primaryKey = 'TV_ID';
  protected $fillable = ['KAT_ID','TV_NAMA','TV_LINK','TV_TGL_RILIS','TV_TGL_UPLOAD','TV_DESC','TV_LIKE'];
}
?>
