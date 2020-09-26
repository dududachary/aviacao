<?php

use Illuminate\Database\Seeder;

class EntidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO entidades (nome) VALUES (?)', array(
            'Biruta Escola de Aviação Civíl'
        ));

        DB::insert('INSERT INTO entidades (nome) VALUES (?)', array(
            'Noroeste Escola de Aviação'
        ));

        DB::insert('INSERT INTO entidades (nome) VALUES (?)', array(
            'Aeroclube de Ijuí'
        ));
    }
}
