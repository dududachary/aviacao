<!-- <?php

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
        DB::insert('INSERT INTO pessoas (
            id_entidade,
            tipo_pessoa,
            nome_pessoal,            
            dt_nascimento,
            cpf,            
            logradouro,
            numero,
            cidade,
            estado,
            cep,
            email,
            fone_celular,
            relacionamento,
            situacao
            ) VALUES (?)', array(
            '1',
            'F',
            'ABEFAER',            
            '2021-01-01',
            '00000000000',            
            'Nenhum',
            '1',
            'Ijui',
            'RS',
            '98700-000',
            email,
            fone_celular,
            relacionamento,
            situacao,          
        ));
    }
} -->
