<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'operator_id',
        'time'
    ];

    public function customers()
    {
        return $this->belongsTo(User::class , 'customer_id');
    }
    public function operators()
    {
        return $this->belongsTo(User::class , 'operator_id');
    }

}
