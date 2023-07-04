<?php

namespace App\Models\Santos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SantoMilagro extends Model
{
    use HasFactory;
    protected $fillable = [
        'date','text','country_id','location_id','coordinate'
    ];
}
