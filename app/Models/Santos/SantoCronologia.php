<?php

namespace App\Models\Santos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SantoCronologia extends Model
{
    use HasFactory;
    protected $fillable = [
        'ano','history','country','location','latitude','longitude','santo_santo_id'
    ];
}
