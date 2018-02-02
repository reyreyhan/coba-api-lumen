<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PensPost extends Model {
  protected $table = 'penspost';
  protected $primaryKey = 'POST_ID';
  protected $fillable = ['POST_NAMA','POST_TGL_RILIS','POST_IMAGE','POST_DESC','POST_LIKE'];
}
?>
