<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubesTable extends Migration
{
    public function up()
    {
        Schema::create('clubes', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('nome', 45);
            $table->string('provincia', 30);
            $table->string('cidade', 30);
            $table->string('descricao', 150);
            $table->timestamps(); 
        });
    }

     public function down()
    {
        Schema::dropIfExists('clubes');
    }
}