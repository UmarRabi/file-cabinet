<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $table='appointments';
    protected $fillable=[
        'title',
        'channel',
        'booked_date',
        'booked_time',
        'location',
        'details'
    ];

    public function service(){
        return $this->belongsTo(Services::class, 'service_code', 'code');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
