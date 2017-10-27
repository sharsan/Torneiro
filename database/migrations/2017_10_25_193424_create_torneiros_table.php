<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTorneirosTable extends Migration
{ 
    public function up()
    {
        Schema::create('torneiros', function (Blueprint $table) 
        {
            $table->increments('id');  
            $table->string('nome', 100);       
            $table->date('datai');      
            $table->date('datat');
            $table->integer('participantes'); 
            $table->integer('rapazes'); 
            $table->integer('raparigas'); 
            $table->integer('desclassificados');   
            $table->string('descricao', 150);  
            $table->timestamps(); 
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('torneiros');
    }
} 