<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Al crear una migración podemos emplear los patrones
     * create_ xx _table: Laravel crea una migración con el scaffolding para crear una nueva tabla
     * _to_ | _in_: Laravel crea el scaffolding para alterar una tabla (añadiendo, removiendo o cambiando los campos)
     *
     * create_projects_table
     * create_orders_table
     * add_phone_to_users_table
     * add_excerpt_to_projects_table
     * drop_phone_to_users_table
     * rename_excerpt_to_sinopsis_in_projects_table
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
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
        Schema::dropIfExists('projects');
    }
}
