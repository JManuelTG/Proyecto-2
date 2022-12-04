<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['plataforma','user_id','juego','descripcion', 'precio'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
