<?php

namespace App\Models\Santos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SantoGaleria extends Model
{
    use HasFactory;
    protected $fillable = [
        'image','text','text_alternative'
    ];
}
