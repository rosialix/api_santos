<?php

namespace App\Models\Santos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SantoSanto extends Model
{
    use HasFactory;
    protected $fillable = [
        'santo_name','name','last_name','birth_date','birth_of_death','country','location','latitude','longitude','biography','galeria','santo_santuario_id'
    ];

    public function santoSantuario()
    {
        return $this->belongsTo(SantoSantuario::class);
    }

    public function santoPensamientos()
    {
        return $this->hasMany(SantoPensamiento::class);
    }

    public function santoCronologias()
    {
        return $this->hasMany(SantoCronologia::class);
    }

    public function santoPatronos()
    {
        return $this->hasMany(SantoPatrono::class);
    }
}
