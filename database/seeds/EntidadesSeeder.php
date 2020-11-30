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
            'Público'
        ));

    }
}
