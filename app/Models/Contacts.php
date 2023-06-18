<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
    protected $table='contacts';
    public $_token;
    protected $fillable=[
        'firstname',
        'lastname',
        'middlename',
        'address',
        'phone',
        'email',
        'postal_code',
        'city'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
