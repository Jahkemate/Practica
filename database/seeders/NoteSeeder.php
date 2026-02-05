<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notes')->insert([
            'title' => '¿Para que sirve Composer?',
            'content' => ' Con Composer podemos instalar y actualizar frameworks como Laravel o Symfony,
                            así como componentes para generar PDF, procesar pagos con tarjetas, manipular imágenes y mucho más.',
        ]);
    }
}
