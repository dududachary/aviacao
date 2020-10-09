<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_entidade')->constrained('entidades')->onDelete('cascade');
            $table->string('tipo_pessoa', 1);

            $table->string('nome_pessoal', 200)->nullable();
            $table->string('nome_social', 200)->nullable();
            $table->string('nome_pai', 200)->nullable();
            $table->string('nome_mae', 200)->nullable();
            $table->date('dt_nascimento')->nullable();
            $table->string('sinais_particulares', 250)->nullable();
            $table->string('sexo', 50)->nullable();
            $table->string('escolaridade', 150)->nullable();
            $table->string('tp_sangue', 5)->nullable();
            $table->string('cpf')->nullable();
            $table->string('identidade')->nullable();
            $table->string('orgao_expeditor', 25)->nullable();
            $table->string('titulo_eleitor')->nullable();
            $table->string('certificado_militar')->nullable();
            
            $table->string('nome_fantasia', 200)->nullable();
            $table->string('razao_social', 200)->nullable();
            $table->string('cnpj')->nullable();
            $table->string('inscrição_estadual')->nullable();
            $table->string('ramo_atividade', 250)->nullable();
            
            $table->string('logradouro', 250)->nullable();
            $table->string('numero')->nullable();
            $table->string('bairro', 250)->nullable();
            $table->string('complemento', 250)->nullable();
            $table->string('cidade', 250)->nullable();
            $table->string('estado', 2)->nullable();
            $table->integer('cep')->nullable();

            $table->string('email', 250)->nullable();
            $table->string('fone_residencial')->nullable();
            $table->string('fone_comercial')->nullable();
            $table->string('fone_celular')->nullable();

            $table->string('relacionamento', 50)->nullable();
            $table->string('codigo_anac')->nullable();
            $table->string('classe_cma', 50)->nullable();
            $table->date('validade_cma')->nullable();
            $table->string('observacoes_pessoa', 50)->nullable();
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
