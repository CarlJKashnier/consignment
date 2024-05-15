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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('dba_name');
            $table->string('primary_contact_name');
            $table->string('address_of_record');
            $table->string('address2_of_record');
            $table->string('city_of_record');
            $table->string('state_of_record');
            $table->string('zip_of_record');
            $table->integer('owned_by_client_id');
            $table->integer('consignment_percentage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
