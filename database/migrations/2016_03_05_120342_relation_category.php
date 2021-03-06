<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('tb_relation_blog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_category')->unsigned();
            $table->integer('id_relasi')->unsigned();

            $table->foreign('id_category')
                      ->references('id')->on('tb_category')
                      ->onDelete('cascade');

            $table->foreign('id_relasi')
                      ->references('id')->on('tb_blog')
                      ->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('tb_relation_portfolio', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('id_category')->unsigned();
           $table->integer('id_relasi')->unsigned();

           $table->foreign('id_category')
                     ->references('id')->on('tb_category')
                     ->onDelete('cascade');

           $table->foreign('id_relasi')
                     ->references('id')->on('tb_portfolio')
                     ->onDelete('cascade');

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
         //
         Schema::drop('tb_relation_blog');
         Schema::drop('tb_relation_portfolio');
     }
}
