<?php

namespace App\Models\Santos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SantoMensaje extends Model
{
    use HasFactory;
    protected $fillable = ['fecha','text'];
}
