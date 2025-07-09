<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class details extends Model
{
  use HasFactory;

  protected $guarded = [];

  protected $table = 'details';


  public function Category(){
    return $this->belongsTo(Category::class);
  }

  public function studentrecords()
  {
    return $this->belongsTo(studentrecords::class, 'id');
  }
}
