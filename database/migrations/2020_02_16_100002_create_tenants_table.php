<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->bigIncrements('id_tenant');
            $table->string('tenant_name');
            $table->string('tenant_email');
            $table->string('tax_id');
            $table->string('phone_1');
            $table->string('phone_2');
            $table->text('details');
            $table->integer('apto_id');
            $table->foreign('apto_id')->references('id_apto')->on('apartments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}
