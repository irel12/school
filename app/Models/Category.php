<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use HasFactory;
   
   protected $guarded = [];

    protected $table = 'categories';
    public function details()
    {
    return $this->hasMany(details::class);
    }

}
