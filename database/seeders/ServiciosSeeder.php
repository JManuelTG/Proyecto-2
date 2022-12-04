<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::create(['plataforma'=>'Steam','user_id'=>1,'juego' => 'Destiny 2','descripcion' => 'Porfa','precio' => 1]);
        Servicio::create(['plataforma'=>'Xbox','user_id'=>2,'juego' => 'Destiny ','descripcion' => 'I need','precio' => 200]);
        Servicio::create(['plataforma'=>'Steam','user_id'=>1,'juego' => 'Destiny 2','descripcion' => 'Please','precio' => 43]);
        Servicio::create(['plataforma'=>'PS','user_id'=>2,'juego' => 'OverWatch 2 ','descripcion' => 'I need','precio' => 200]);
    }
}
