<?php

namespace App\Models\Santos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SantoPensamiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_origen','thought','santo_santo_id'
    ];


}
