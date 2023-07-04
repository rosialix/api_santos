<?php

namespace App\Models\Santos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SantoSantuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','date_fundada','history','country','location','latitude','longitude'
    ];


}
