<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RealEstate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estates', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->foreign('region_id')->refernces('id')->on('regions');
        $table->foreign('city_id')->refernces('id')->on('cities');
        $table->foreign('district_id')->refernces('id')->on('districts')->nullable();
        $table->string('official')->nullable();
        $table->string('tract')->nullable();
        $table->string('suburb')->nullable();
        $table->unsignedDouble('north')->nullable();
        $table->unsignedDouble('east')->nullable();
        $table->boolean('urban_range')->default(1);
        $table->string('land_mark')->nullable();
        $table->unsignedInteger('land_mark_closer')->nullable();
        $table->foreign('type_id')->refernces('id')->on('types');
        $table->string('building_type')->nullable();
        $table->string('building_status')->nullable();
        $table->integer('property_age')->nullable();
        $table->string('property_details')->nullable();
        $table->string('land_nature')->nullable();
        $table->unsignedDouble('property_long')->nullable();
        $table->unsignedDouble('property_width')->nullable();
        $table->unsignedDouble('property_full_area');
        $table->unsignedDouble('building_long')->nullable();
        $table->unsignedDouble('building_width')->nullable();
        $table->unsignedDouble('building_area')->nullable();
        $table->unsignedDouble('total_building_area')->nullable();
        $table->string('total_building_area_details')->nullable();
        $table->foreign('document_type_id')->refernces('id')->on('document_types');
        $table->boolean('document_involve_all')->default(1);
        $table->string('how_much_involved')->nullable();
        $table->boolean('warranties')->default(0);
        $table->string('warranties_details')->nullable();
        $table->boolean('power')->default(0);
        $table->string('power_size')->nullable();
        $table->string('water_source')->nullable();
        $table->string('water_tank')->nullable();
        $table->boolean('sanitation')->default(1);
        $table->string('closer_masjed')->nullable();
        $table->string('boy_schools')->nullable();
        $table->string('girl_schools')->nullable();
        $table->boolean('is_offered')->default(1);
        $table->unsignedDouble('offer')->nullable();
        $table->date('offer_date')->nullable();
        $table->unsignedDouble('price_per_meter')->nullable();
        $table->unsignedDouble('last_price');
        $table->boolean('Negotiable')->default(1);
        $table->boolean('marketing')->default(1);
        $table->string('Marketing_authorization_details')->nullable();
        $table->timestamps();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_estates');
    }
}
