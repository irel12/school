<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Studentrecords extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $table = 'studentrecords';

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function details()
    {
        return $this->hasMany(details::class, 'studentrecords_id');
    }

}


