<?php

namespace App\Models\Santos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SantoPatrono extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_fundada','history_community','country','location','latitude','longitude','santo_santo_id'
    ];
}
