<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asignatura;

class AsignaturaSeeder extends Seeder
{
    public function run()
    {
        Asignatura::create(['nombre' => 'Matemáticas', 'nivel' => 'Básico']);
        Asignatura::create(['nombre' => 'Programación', 'nivel' => 'Intermedio']);
        Asignatura::create(['nombre' => 'Base de Datos', 'nivel' => 'Avanzado']);
    }
}
