<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('tareas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('proyecto_id')->unsigned();
            $table->string('nombre',20);
            $table->string('descripcion',30);
            $table->string('alias',20)->unique();
            $table->boolean('status')->default(0);

            $table->timestamps();

            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
