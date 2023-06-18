<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;
    protected $table='files';

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
